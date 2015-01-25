<?php

class MenuController extends BaseController
{

    public function __construct()
    {
    }

    public function editMenu()
    {
        // return if no id was sent to controller
        if (!Input::has('id')) {
            return Redirect::to('admin/menumanagement');
        }

        try {
            // get the id out of the request params and find the right menu in database
            $menu = Menu::find(Input::get('id'));

            // return to management site if no menu was found by id!!
            if ($menu == null) {
                return Redirect::to('admin/menumanagement');
            }

            // update the menu
            $menu->menuDate = Input::get('menuDate');
            $menu->menuDescription = Input::get('menuDescription');
            $menu->menuTitle = Input::get('menuTitle');

            //
            $menu->save();

            return Redirect::to('admin/menumanagement');
        } catch (Exception $e) {
            return Redirect::to('error');
        }
    }

    // Server side paging and sorting of online menus
    public function getOnlineMenus()
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

        $result = DB::table('menus')->where('isActive', 1)->get();

//get the result size
        $count = sizeof($result);

//order the array
        if ($order != "asc") {
            $result = array_reverse($result);
        }

//get the subview of the array
        $result = array_slice($result, $offset, $limit);

        echo "{";
        echo '"total": ' . $count . ',';
        echo '"rows": ';
        echo json_encode($result);
        echo "}";
    }

    // Server side paging and sorting of offline menus
    public function getOfflineMenus()
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

        $result = DB::table('menus')->where('isActive', 0)->get();

//get the result size
        $count = sizeof($result);

//order the array
        if ($order != "asc") {
            $result = array_reverse($result);
        }

//get the subview of the array
        $result = array_slice($result, $offset, $limit);

        echo "{";
        echo '"total": ' . $count . ',';
        echo '"rows": ';
        echo json_encode($result);
        echo "}";
    }

    public function setMenusOnline()
    {
        try {
            // decode the json data from ajax request
            $data = json_decode($GLOBALS["HTTP_RAW_POST_DATA"]);

            foreach ($data as $menu) {
                if ($menu->isActive == 0) {
                    continue;
                }

                // set menu in database active
                DB::table('menus')->where('id', $menu->id)->update(array('isActive' => 1));
            }
        } catch (Exception $e) {
            return null;
        }
    }

    // create new orders for users
    public function orderMenus()
    {
        try {
            // decode the json data from ajax request
            $data = json_decode($GLOBALS["HTTP_RAW_POST_DATA"]);

            // iterate through data object
            foreach ($data as $order) {
                // create new order for earch ordered menu --> if there where 2 menus ordered --> create 2 seperate orders
                for ($i = 0; $i < $order->orderCount; $i++) {
                    $newOrder = new Order();

                    $newOrder->orderDate = date("Y-m-d H:i:s");
                    $newOrder->isCanceled = false;
                    $newOrder->user_id = Auth::user()->id;
                    $newOrder->menu_id = $order->id;

                    $newOrder->save();
                }
            }
        } catch (Exception $e) {
            return null;
        }
    }
}
