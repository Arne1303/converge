import Alpine from "alpinejs";
import Mousetrap from '@danharrin/alpine-mousetrap'
import anchor from "@alpinejs/anchor";
import collapse from "@alpinejs/collapse";
import focus from "@alpinejs/focus";

import tableOfContent from "./components/tableOfContent";
import tabs from "./components/tabs";
import dropdown from "./components/dropdown";
import sidebar from "./components/sidebar";
import clipboard from "./components/clipboard";
import themeSwitcher from "./components/themeSwitcher";
import search from "./components/search/search";
import showContents from "./components/showContents";

// plugins
Alpine.plugin(anchor);
Alpine.plugin(collapse);
Alpine.plugin(focus);
Alpine.plugin(Mousetrap)

// components
Alpine.data("themeSwitcher", themeSwitcher);
Alpine.data("showContentsTweacks",showContents)
Alpine.data("tableOfContent", tableOfContent);
Alpine.data("codeBlockClipboard", clipboard);
Alpine.data("tabs", tabs);
Alpine.data("dropdown", dropdown);
Alpine.data("sidebar", sidebar);
Alpine.data("search", search);


window.Alpine = Alpine;
Alpine.start();
