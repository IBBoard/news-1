<?php print_unescaped($this->inc('part.content.cronwarning')) ?>

<div id="explore">
    <!--<div class="explore-filter">
        <label>
            <input ng-model="Explore.filter" type="search" placeholder="<?php p(addslashes($l->t('filter'))) ?>" news-auto-focus>
        </label>
    </div>-->
    <div class="explore-header">
        <a href="https://github.com/owncloud/news/wiki/Explore-Feed-Section"><?php p($l->t('Got more awesome feeds? Share them with us!')) ?></a>
    </div>
    <div class="grid">
        <div ng-repeat="entry in Explore.feeds | filter:Explore.filter | orderBy:'-votes'" ng-show="!Explore.feedExists(entry.feed)" class="explore-feed grid-item" news-refresh-masonry>
            <span class="category">{{ entry.category }}</span>
            <h1 ng-show="entry.favicon"
                ng-style="{ backgroundImage: 'url(' + entry.favicon + ')'}">
                <a target="_blank" ng-href="{{ entry.url }}">{{ entry.title }}</a>
            </h1>
            <h1 ng-hide="entry.favicon" class="icon-rss">
                {{ entry.title }}
            </h1>
            <div style="clear:both"></div>
            <div class="explore-content">
                <p>{{ entry.description }}</p>

                <div class="explore-logo">
                    <img ng-src="{{ entry.image }}" ng-if="entry.image">
                </div>
            </div>
            <div class="explore-subscribe">
                <button ng-click="Explore.subscribeTo(entry.feed)">
                    <?php p($l->t('Subscribe')) ?>
                </button>
            </div>
        </div>
    </div>
</div>