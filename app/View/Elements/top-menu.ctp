<div id="menu-container">
    <ul>
        <li<?= ($controller == 'home' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/">SwitchLearn</a></li>
        <li<?= ($controller == 'learn' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/learn/">Learn</a></li>
        <li<?= ($controller == 'create' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/create/">Create</a></li>
        <li<?= ($controller == 'donate' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/donate/">Donate</a></li>
        <li<?= ($controller == 'feedback' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/feedback/">Feedback</a></li>
        <li class="search">
            <input type="text" id="searchInput" placeholder="search"/>
            <div id="searchButton-small">
                <?= $this->Html->image('searchIcon-small.png', array('alt' => 'Search Icon')) ?>
            </div>
        </li>
        <li<?= ($controller == 'login' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/login/">Login</a></li>
    </ul>
</div>