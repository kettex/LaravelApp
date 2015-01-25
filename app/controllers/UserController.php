<?php

class UserController extends BaseController
{
    /**
     * show order overview view for users
     */
    public function showOrderOverview()
    {
        return View::make('user/orderoverview');
    }

    /**
     * show menuoverview view for users with menus
     */
    public function showMenuOverView()
    {
        $menus = DB::table('menus')->orderBy('menuDate', 'asc')->where('menuDate', '>', time())->where('isActive', 1)->get();
        return View::make('user/menuoverview')->with('menus', $menus);
    }

    /**
     * show userprofile with data of authenticated user
     */
    public function showProfile()
    {
        return View::make('user/profile', array('user' => Auth::user()));
    }

    /**
     * update the userprofile
     */
    public function updateProfile()
    {
        $authUser = Auth::user();

        try {
            /**
             * set the user profile information out of the authenticated user if they are not in the request params
             */
            if (isset($_POST['company'])) {
                $company = $_POST['company'];
            } else {
                $company = $authUser->company;
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $email = $authUser->email;
            }

            if (isset($_POST['deliveryAddress'])) {
                $deliveryAddress = $_POST['deliveryAddress'];
            } else {
                $deliveryAddress = $authUser->deliveryAddress;
            }

            if (isset($_POST['zip'])) {
                $zip = $_POST['zip'];
            } else {
                $zip = $authUser->zip;
            }

            if (isset($_POST['city'])) {
                $city = $_POST['city'];
            } else {
                $city = $authUser->city;
            }

            /**
             * create an input array for validation
             */
            $input = array(
                'company' => $company,
                'email' => $email,
                'deliveryAddress' => $deliveryAddress,
                'zip' => $zip,
                'city' => $city
            );

            /**
             * create the validator
             */
            $validator = User::validateProfileModel($input);

            /**
             * validate the input
             */
            if ($validator->passes()) {
                /**
                 * update the userprofile
                 */
                DB::table('users')->where('id', Auth::user()->id)->update(array('company' => $company, 'email' => $email, 'deliveryAddress' => $deliveryAddress, 'zip' => $zip, 'city' => $city));
                // for showing the updated data --> fetch authenticated user from DB and pass it to view
                return View::make('user/profile', array('user' => User::find(Auth::user()->id)));
            } else {
                return Redirect::to('user/profile', array('user' => User::find(Auth::user()->id)))->withErrors($validator->getMessages());
            }
        } catch (Exception $e) {
            return Redirect::to('error');
        }
    }

    /**
     * Server side search, paging and sorting for user table in admin/usermanagement
     */
    public function getUsers()
    {
        if (isset($_GET["limit"])) {
            $limit = $_GET["limit"];
        } else {
            $limit = 10;
        }

        if (isset($_GET["offset"])) {
            $offset = $_GET["offset"];
        } else {
            $offset = 0;
        }

        if (isset($_GET["sort"])) {
            $sort = $_GET["sort"];
        } else {
            $sort = "";
        }

        if (isset($_GET["order"])) {
            $order = $_GET["order"];
        } else {
            $order = "asc";
        }

        if (isset($_GET["search"])) {
            /**
             * string concatination for 'like' keyword in mysql query
             */
            $search = '%' . $_GET["search"] . '%';
        } else {
            $search = "";
        }

        if ($search == "") {
            $result = DB::table('users')->get();
        } else {
            $result = DB::table('users')->where(function ($query) use ($search) {
                $query->where('city', 'like', $search)
                    ->orwhere('company', 'like', $search)
                    ->orwhere('deliveryAddress', 'like', $search)
                    ->orwhere('email', 'like', $search)
                    ->orwhere('username', 'like', $search)
                    ->orwhere('zip', 'like', $search);
            })->get();
        }

        // get the result size
        $count = sizeof($result);

        // order the array
        if ($order != "asc") {
            $result = array_reverse($result);
        }

        // get the subview of the array
        $result = array_slice($result, $offset, $limit);

        echo "{";
        echo '"total": ' . $count . ',';
        echo '"rows": ';
        echo json_encode($result);
        echo "}";
    }

    /**
     * authenticate the user
     */
    public function authUser()
    {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            return Redirect::to('login');
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Authenticate user und remember him --> set second parameter to 'true'
        if (Auth::attempt(array('username' => $username, 'password' => $password, 'isActive' => 1), true)) {
            if (Auth::user()->isAdmin) {
                /**
                 * user is admin --> return to admin views
                 */
                return Redirect::intended('admin/dashboard');
            } else {
                /**
                 * user is normal user --> return to user views
                 */
                return Redirect::intended('user/orderoverview');
            }
        }

        return Redirect::to('login');
    }

    /**
     * Server side paging and sorting for latestOrderedMenus table in user/orderoverview
     */
    public function getLatestOrderedMenus()
    {
        if (isset($_GET["limit"])) {
            $limit = $_GET["limit"];
        } else {
            $limit = 10;
        }

        if (isset($_GET["offset"])) {
            $offset = $_GET["offset"];
        } else {
            $offset = 0;
        }

        if (isset($_GET["sort"])) {
            $sort = $_GET["sort"];
        } else {
            $sort = "";
        }

        if (isset($_GET["order"])) {
            $order = $_GET["order"];
        } else {
            $order = "asc";
        }

        $resultOrders = DB::table('orders')->where('user_id', Auth::user()->id)->get();


        for ($i = 0; $i < count($resultOrders); $i++) {
            try {
                $menu = Menu::find($resultOrders[$i]->menu_id);
                $resultOrders[$i]->menuDescription = $menu->menuDescription;
                $resultOrders[$i]->menuTitle = $menu->menuTitle;
                $resultOrders[$i]->menuDate = $menu->menuDate;
            } catch (Exception $e) {

            }
        }

//get the result size
        $count = sizeof($resultOrders);

//order the array
        if ($order != "asc") {
            $result = array_reverse($resultOrders);
        }

//get the subview of the array
        $result = array_slice($resultOrders, $offset, $limit);

        echo "{";
        echo '"total": ' . $count . ',';
        echo '"rows": ';
        echo json_encode($result);
        echo "}";
    }
}
