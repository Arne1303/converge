<div class='flex items-center'>
    <div class="z-50"
         x-data="{
             theme: null,
             init() {
                 this.theme = localStorage.getItem('theme')
                 this.$watch('theme', () => {
                     $dispatch('theme-changed', this.theme)
                 })
             },
             setTheme(val) {
                 this.theme = val;
             },
             themeIs(mode) {
                 return this.theme === mode;
             }
         }">
        <x-converge::dropdown>
            <x-slot:button>
                <div aria-expanded="false">
                    <span class="dark:hidden">
                        <svg class="h-6 w-6"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">
                            <path class="stroke-primary"
                                  d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                            </path>
                            <path class="stroke-primary"
                                  d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836">
                            </path>
                        </svg>
                    </span>
                    <span class="hidden dark:inline">
                        <svg class="h-6 w-6"
                             viewBox="0 0 24 24"
                             fill="none">
                            <path class="fill-transparent"
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z">
                            </path>
                            <path class="fill-primary"
                                  d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z">
                            </path>
                            <path class="fill-primary"
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z">
                            </path>
                        </svg>
                    </span>
                </div>
            </x-slot:button>
            <x-slot:items
                    class="w-36">
                <x-converge::dropdown.item class="flex items-center gap-1"
                                           x-on:click="setTheme('light')">
                    <svg class="mr-1 h-5 w-5"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">
                        <path x-bind:class="themeIs('light') ? 'stroke-primary' : 'stroke-base-content'"
                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                        <path x-bind:class="themeIs('light') ? 'stroke-primary' : 'stroke-base-content'"
                              d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836">
                        </path>
                    </svg>
                    <span x-bind:class="themeIs('light') ? 'text-primary' : 'text-base-content'">Light</span>
                </x-converge::dropdown.item>
                <x-converge::dropdown.item class="flex items-center gap-1"
                                           x-on:click="setTheme('dark')">
                    <svg class="mr-1 h-5 w-5"
                         viewBox="0 0 24 24"
                         fill="none">
                        <path class="fill-transparent"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z">
                        </path>
                        <path x-bind:class="themeIs('dark') ? 'fill-primary' : 'fill-base-content'"
                              d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z">
                        </path>
                        <path x-bind:class="themeIs('dark') ? 'fill-primary' :
                            'fill-base-content'"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z">
                        </path>
                    </svg>
                    <span x-bind:class="themeIs('dark') ? 'text-primary' : 'text-base-content'">Dark</span>
                </x-converge::dropdown.item>
                <x-converge::dropdown.item class="flex items-center gap-1"
                                           x-on:click="setTheme('system')">
                    <svg class="mr-1 h-5 w-5"
                         viewBox="0 0 24 24"
                         fill="none">
                        <path x-bind:class="themeIs('system') ? 'stroke-primary' : 'strock-base-content'"
                              d="M4 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6Z"
                              stroke-width="2"
                              stroke-linejoin="round"></path>
                        <path x-bind:class="themeIs('system') ? 'stroke-primary' :
                            'stroke-base-content'"
                              d="M14 15c0 3 2 5 2 5H8s2-2 2-5"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                    <span x-bind:class="themeIs('system') ? 'text-primary' : 'text-base-content'">System
                    </span>
                </x-converge::dropdown.item>
            </x-slot:items>
        </x-converge::dropdown>
    </div>

</div>
