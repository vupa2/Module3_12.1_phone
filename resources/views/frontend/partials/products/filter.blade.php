        <!-- FILTER HEADER -->
        <div class="filter-header">
            <h6 class="title">Showing {{ count($products) }} out of {{ $products->total() }} results</h6>
            <!-- VIEW SELECTORS -->
            <div class="view-selectors">
                <!-- VIEW SELECTOR -->
                <a href="shop-grid.html" class="view-selector">
                    <!-- SVG GRID -->
                    <svg class="svg-grid">
                        <use xlink:href="#svg-grid"></use>
                    </svg>
                    <!-- /SVG GRID -->
                </a>
                <!-- /VIEW SELECTOR -->

                <!-- VIEW SELECTOR -->
                <a href="shop-list.html" class="view-selector selected">
                    <!-- SVG LIST -->
                    <svg class="svg-list">
                        <use xlink:href="#svg-list"></use>
                    </svg>
                    <!-- /SVG LIST -->
                </a>
                <!-- /VIEW SELECTOR -->
            </div>
            <!-- /VIEW SELECTORS -->

            <!-- FILTER OPTIONS -->
            <div class="filter-options">
                <!-- FILTER OPTION -->
                <div class="filter-option">
                    <h6 class="title">Sort by:</h6>
                    <!-- SELECT BLOCK -->
                    <label for="price_filter" class="select-block">
                        <select name="price_filter" id="price_filter">
                            <option value="0">Product Price</option>
                            <option value="1">Product Rating</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow face-down">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                    <!-- SELECT BLOCK -->
                </div>
                <!-- /FILTER OPTION -->

                <!-- FILTER OPTION -->
                <div class="filter-option">
                    <h6 class="title">Arrange:</h6>
                    <!-- SELECT BLOCK -->
                    <label for="items_page" class="select-block">
                        <select name="items_page" id="items_page">
                            <option value="0">Lowest to Highest</option>
                            <option value="1">Highest to Lowest</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow face-down">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                    <!-- SELECT BLOCK -->
                </div>
                <!-- /FILTER OPTION -->

                <!-- FILTER OPTION -->
                <div class="filter-option">
                    <h6 class="title">Show:</h6>
                    <!-- SELECT BLOCK -->
                    <label for="items_page2" class="select-block">
                        <select name="items_page2" id="items_page2">
                            <option value="0">12 Items per Page</option>
                            <option value="1">6 Items per Page</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow face-down">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                    <!-- SELECT BLOCK -->
                </div>
                <!-- /FILTER OPTION -->
            </div>
            <!-- /FILTER OPTIONS -->
        </div>
        <!-- /FILTER HEADER -->
