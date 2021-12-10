<!-- // Manually typed in sql table name as <option> name
// Manually typed in $selectName as <select> name  -->

<h2>Character #<?php echo $character_order; ?></h2>

<h3>Best Weapons</h3>
<?php $optionTable = 'weapons'; ?>

<?php $selectName = $character_order.'weapon1'; ?>
<label for="weapon1">1st</label>
<?php include __DIR__ . '/dropdown-select.php'; 
?>
<br>

<?php $selectName = $character_order.'weapon2'; ?>
<label for="weapon2">2nd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'weapon3'; ?>
<label for="weapon3">3rd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>

<h3>Best Artifact</h3>
<?php $optionTable = 'artifact_sets'; ?>

<?php $selectName = $character_order.'artifact1'; ?>
<label for="artifact1">1st</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact2'; ?>
<label for="artifact2">2nd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact3'; ?>
<label for="artifact3">3rd</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>

<h3>Artifact Stat Priority</h3>
<?php $optionTable = 'artifact_stats'; ?>

<?php $selectName = $character_order.'artifact_priority1'; ?>
<label for="artifact_priority1">1.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact_priority2'; ?>
<label for="artifact_priority2">2.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact_priority3'; ?>
<label for="artifact_priority3">3.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact_priority4'; ?>
<label for="artifact_priority4">4.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact_priority5'; ?>
<label for="artifact_priority5">5.</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>

<h3>Recommended Main Stats for Artifact Parts</h3>

<?php $selectName = $character_order.'artifact_sands'; ?>
<label for="artifact_sands">Sands of Eon</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact_goblet'; ?>
<label for="artifact_goblet">Goblet of Eonothem</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>
<br>

<?php $selectName = $character_order.'artifact_circlet'; ?>
<label for="artifact_circlet">Circlet of Logos</label>
<?php include __DIR__ . '/dropdown-select.php'; ?>



