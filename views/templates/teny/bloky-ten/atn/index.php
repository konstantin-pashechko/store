<style>
.wrapper { display: flex; justify-content: space-evenly; flex-wrap: wrap;} 
.box { width: 47vw; }
</style>

<?php include $this->nav; ?>

<div class="wrapper">
  <div class="box">
    <h2>Титан 100x100 трубка нержавеющая сталь</h2>
    <table id="<?php echo $this->view.'_titan-100-nerzh'; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th class="bb title">Мощность</th>
          <th class="bb title">Длина(раб. части)</th>
          <th class="bb title">Артикул</th>
          <th class="bb title">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['titan-100-nerzh'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-red title black"><val><?php echo floatval($value['param0']) ?></val> титан</td>
            <td field="param1" class="b-green title black"><?php echo $value['param1']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
        <h2>Титан 100x100 трубка черная сталь</h2>
    <table id="<?php echo $this->view.'_titan-100-chern'; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th class="bb title">Мощность</th>
          <th class="bb title">Длина(раб. части)</th>
          <th class="bb title">Артикул</th>
          <th class="bb title">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['titan-100-chern'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-red title black"><val><?php echo floatval($value['param0']) ?></val> титан</td>
            <td field="param1" class="b-green title black"><?php echo $value['param1']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
        <h2>Титан / нестандарт</h2>
    <table id="<?php echo $this->view.'_nestandart'; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th class="bb title">Мощность</th>
          <th class="bb title">Длина</th>
          <th class="bb title">Фланец</th>
          <th class="bb title">Трубка</th>
          <th class="bb title">Артикул</th>
          <th class="bb title">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['nestandart'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-red title black"><val><?php echo floatval($value['param0']) ?></val> титан</td>
            <td field="param1" class="b-green title black"><?php echo $value['param1']; ?></td>
            <td field="param2" class="b-yellow name center"><?php echo $value['param2']; ?></td>
            <td field="param4" class="b-blue name center"><?php echo $value['param4']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<div class="wrapper">
  <div class="box">
        <h2>Блоки ЭКО внутренняя резьба</h2>
    <table id="<?php echo $this->view.'_eco-vnutr'; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th class="bb title">Мощность</th>
          <th class="bb title">Длина(раб. части)</th>
          <th class="bb title">Фланец</th>
          <th class="bb title">Артикул</th>
          <th class="bb title">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['eco-vnutr'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-red title black"><val><?php echo floatval($value['param0']) ?></val> ЭКО</td>
            <td field="param1" class="b-green title black"><?php echo $value['param1']; ?></td>
            <td field="param2" class="b-purpur name center"><?php echo $value['param2']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <h2>Блоки ЭКО наружная резьба</h2>
    <table id="<?php echo $this->view.'_eco-naruzh'; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th class="bb title">Мощность</th>
          <th class="bb title">Длина(раб. части)</th>
          <th class="bb title">Фланец</th>
          <th class="bb title">Артикул</th>
          <th class="bb title">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['eco-naruzh'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-red title black"><val><?php echo floatval($value['param0']) ?></val> ЭКО</td>
            <td field="param1" class="b-green title black"><?php echo $value['param1']; ?></td>
            <td field="param2" class="b-purpur name center"><?php echo $value['param2']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

