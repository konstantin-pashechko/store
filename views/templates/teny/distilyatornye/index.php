<h2>ТЭНы дистилляторные</h2>
<table id="<?= $this->view ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th rowspan="4" class="stitle b-green"><p style="margin-bottom: 2em;">кВт</p></th>
      <th rowspan="4" colspan="2" class="stitle b-yellow"><p style="margin-bottom: 2em;">Форма</p></th>
      <th rowspan="4" class="stitle b-blue"><p style="margin-bottom: 2em;">Длина</p></th>
      <th colspan="18" class="title b-red">Штуцер</th>
    </tr>
    <tr>
      <th colspan="8" class="stitle b-green">М14</th>
      <th colspan="4" class="stitle b-yellow">М16</th>
      <th colspan="6" class="stitle b-blue">М18</th>
    </tr>
    <tr>
      <th colspan="4" class="sstitle b-dgreen">медь</th>
      <th colspan="4" class="sstitle b-lgreen">нержавейка</th>
      <th colspan="2" class="sstitle b-dyellow">медь</th>
      <th colspan="2" class="sstitle b-lyellow">нержавейка</th>
      <th colspan="2" class="sstitle b-dblue">медь</th>
      <th colspan="4" class="sstitle b-lblue">нержавейка</th>
    </tr>
    <tr>
      <th colspan="2" class="sstitle b-dgreen">Ø 8</th>
      <th colspan="2" class="sstitle b-dgreen">Ø 10</th>
      <th colspan="2" class="sstitle b-lgreen">Ø 8</th>
      <th colspan="2" class="sstitle b-lgreen">Ø 10</th>

      <th colspan="2" class="sstitle b-dyellow">Ø 10</th>
      <th colspan="2" class="sstitle b-lyellow">Ø 10</th>

      <th colspan="2" class="sstitle b-dblue">Ø 10</th>
      <th colspan="2" class="sstitle b-lblue">Ø 10</th>
      <th colspan="2" class="sstitle b-lblue">Ø 13</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] !== $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
          <td field="param0" class="b-green option"><?= floatval($value['param0']) ?></td>
          <td field="param2" colspan="2" class="b-yellow name"><?= $value['param2'] ?></td>
          <td field="param1" class="b-blue option"><?= $value['param1'] ?></td>

          <td field="sku1" class="b-dgreen sku"><?= $value['sku1'] ?></td>
          <td class="b-dgreen qty"><? $this->get($value['sku1']) ?></td>

          <td field="sku2" class="b-dgreen sku"><?= $value['sku2'] ?></td>
          <td class="b-dgreen qty"><?php $this->get($value['sku2']) ?></td>

          <td field="sku3" class="b-lgreen sku"><?= $value['sku3'] ?></td>
          <td class="b-lgreen qty"><?php $this->get($value['sku3']) ?></td>

          <td field="sku4" class="b-lgreen sku"><?= $value['sku4'] ?></td>
          <td class="b-lgreen qty"><?php $this->get($value['sku4']) ?></td>

          <td field="sku5" class="b-dyellow sku"><?= $value['sku5'] ?></td>
          <td class="b-dyellow qty"><?php $this->get($value['sku5']) ?></td>

          <td field="sku6" class="b-lyellow sku"><?= $value['sku6'] ?></td>
          <td class="b-lyellow qty"><?php $this->get($value['sku6']) ?></td>

          <td field="sku7" class="b-dblue sku"><?= $value['sku7'] ?></td>
          <td class="b-dblue qty"><?php $this->get($value['sku7']) ?></td>

          <td field="sku8" class="b-lblue sku"><?= $value['sku8'] ?></td>
          <td class="b-lblue qty"><?php $this->get($value['sku8']) ?></td>

          <td field="sku9" class="b-lblue sku"><?= $value['sku9'] ?></td>
          <td class="b-lblue qty"><?php $this->get($value['sku9']) ?></td>
        </tr>
      <?php endforeach; ?>
  </tbody>
</table>