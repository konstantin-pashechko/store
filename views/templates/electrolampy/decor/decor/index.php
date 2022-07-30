<?php $this->nav() ?>
<table id="<?php echo $this->view ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="16" class="center st">Светодиодные лампы</th>
    </tr>
    <tr class="bordered">
      <th colspan="4" bgcolor="#FDFEFE" class="high black bal">ШАР / СВЕЧА / ЗЕРК</th>     
      <th colspan="3" class="center black bal">MAXUS</th>
      <th colspan="3" class="center black bal">DELUX</th>
      <th colspan="3" class="center black bal">GLOBAL</th>
      <th colspan="3" class="center black bal">ETRON</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($this->data as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
        <td field="param0" class="high black bal"><val><?php echo floatval($value['param0']); ?></val> Вт</td>
        <td field="param2" class="high black bal"><?php echo $value['param2']; ?></td>
        <td field="param4" class="high black bal"><?php echo $value['param4']; ?></td>
        <td field="param3"><?php echo $value['param3'] ?></td>
        <td field="sku1"><?php echo $value['sku1'] ?></td>
        <td field="name1"><?php echo $this->replace($value['name1']) ?></td>
        <td><?php $this->get($value['sku1']) ?></td>
        <td field="sku2"><?php echo $value['sku2'] ?></td>
        <td field="name2"><?php echo $value['name2'] ?></td>
        <td><?php $this->get($value['sku2']) ?></td>
        <td field="sku3"><?php echo $value['sku3'] ?></td>
        <td field="name3"><?php echo $value['name3'] ?></td>
        <td><?php $this->get($value['sku3']) ?></td>
        <td field="sku4"><?php echo $value['sku4'] ?></td>        
        <td field="name4"><?php echo $value['name4'] ?></td>
        <td><?php $this->get($value['sku4']) ?></td>
      </tr>
    <?php endforeach; ?>
    <div id="popup" class="popup">
      <a class="popup-area" href="#"></a>
      <div class="popup-body">
        <div class="popup-content">
          <p>СДЛ TNSy LED А60 9Вт Е27 4000К AC/DC 12-36V куля: <?= $this->get(21542) ?> штук(Арт.21542)</p>
          <p>СДЛ VIDEX LED A60e 10Вт E27 4100К 12-48V (VL-A60e -12V-10274): <?= $this->get(21569) ?> штук(Арт.21569)</p>
        </div>
      </div>
    </div>
  </tbody>
</table>