<?php

class MenuController extends BaseController
{

    public function __construct()
    {
        // Always run csrf protection before the request when posting
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function editMenu()
    {
        // return if no id was sent to controller
        if (!Input::has('id')) {
            return Redirect::to('admin/menumanagement');
        }

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
}
