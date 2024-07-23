<?php require($this->config->item('views') . '/header.php'); ?>
<div class="container-xl">
    <div class="query-form-section">
        <!-- seach form -->
        <form class="" action=""><input class="" spellcheck="false" type="search" value="">

            inpu
            <button class="" type="submit">Search</button>

            <div class="select-wrapper"><select>
                    <option value="relevance" data-tracking-role="search-sort" selected="">Sort by relevance</option>
                    <option value="newest" data-tracking-role="search-sort">Sort by newest</option>
                    <option value="oldest" data-tracking-role="search-sort">Sort by oldest</option>
                </select>
            </div>
        </form>
    </div>
</div>


<?php require($this->config->item('views') . '/footer.php'); ?>


