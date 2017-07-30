<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

          "index" => [
              "text"  => t("Home"),
              "url"   => $this->di->get("url")->create("index"),
              "title" => t("Home's page")
          ],


          "about" => [
              "text"  => t("About"),
              "url"   => $this->di->get("url")->create("about"),
              "title" => t("About this website")
          ],


            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],



            "grids" => [
                           "text"  =>t("Grids"),
                           "url"   => $this->di->get("url")->create("themeGrids"),
                           "title" => "Delta i communityn",
                           "submenu" => [
                               "items" => [
                                   "grid"  => [
                                       "text"  => "Grid",
                                       "url"   => $this->di->get("url")->create("grid"),
                                       "title" => "Vertikal grid",
                                   ],
                                   "Typografi"  => [
                                       "text"  => "Typografi",
                                       "url"   => $this->di->get("url")->create("typografi"),
                                       "title" => "Horisontal grid",
                                   ],

                               ],
                           ],
              ],
              "theme" => [
                  "text"  => t("Tema"),
                  "url"   => $this->di->get("url")->create("theme"),
                  "title" => t("My webbsite theme")
              ],


        ],
    ],




  // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

          "index" => [
              "text"  => t("Home"),
              "url"   => $this->di->get("url")->create("index"),
              "title" => t("Home's page")
          ],

          "about" => [
              "text"  => t("About"),
              "url"   => $this->di->get("url")->create("about"),
              "title" => t("About this website")
          ],

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],


        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
