<h2>Character #<?php echo $character_order; ?></h2>

<h3>Best Weapons</h3>
<?php $selectTable = 'swords'; ?>
<label for="weapon1">1st</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="weapon2">2nd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="weapon3">3rd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>

<h3>Best Artifact</h3>
<?php $selectTable = 'artifact_sets'; ?>
<label for="artifact1">1st</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="artifact2">2nd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="artifact3">3rd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>

<h3>Artifact Stat Priority</h3>
<?php $selectTable = 'artifact_stats'; ?>
<label for="artifact_priority1">1.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="artifact_priority2">2.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="artifact_priority3">3.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="artifact_priority4">4.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>

<h3>Recommended Main Stats for Artifact Parts</h3>
<label for="artifact_sands">Sands of Eon</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="artifact_goblet">Goblet of Eonothem</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>
<label for="artifact_circlet">Circlet of Logos</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>