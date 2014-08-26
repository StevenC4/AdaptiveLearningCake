<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
        <?= $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

        echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
            <div id="menu-container">
                <ul>
                    <li<?= ($this->params['controller'] == 'home' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/">SwitchLearn</a></li>
                    <li<?= ($this->params['controller'] == 'learn' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/learn/">Learn</a></li>
                    <li<?= ($this->params['controller'] == 'create' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/create/">Create</a></li>
                    <li<?= ($this->params['controller'] == 'donate' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/donate/">Donate</a></li>
                    <li<?= ($this->params['controller'] == 'feedback' ? ' class="selected"' : '') ?>><a href="/adaptive-learning/feedback/">Feedback</a></li>
                    <li><a href="javascript:showLoginDiv();">Login</a></li>
                </ul>
            </div>

		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
        <div class="modal-overlay"></div>
        <div class="modal login">
            <div class="modal header">
                <h3>Login</h3>
            </div>
            <div class="modal body">
                <table>
                    <tr>
                        <td><label>Username: </label></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><label>Password: </label></td>
                        <td><input type="password"></td>
                    </tr>
                </table>
            </div>
        </div>
		<div id="footer">

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
