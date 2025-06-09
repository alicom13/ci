/*
 * https://codeigniter.com/user_guide/outgoing/alternative_php.html
 */
<?php if ($username === 'Ali'): ?>
    <h3>Hi Ali</h3>
<?php elseif ($username === 'Akil'): ?>
    <h3>Hi Akil</h3>
<?php else: ?>
    <h3>Hi user</h3>
<?php endif ?>
// foreach & echo
<ul>
<?php foreach ($todo as $item): ?>
    <li><?= esc($item) ?></li>
<?php endforeach ?>
</ul>
