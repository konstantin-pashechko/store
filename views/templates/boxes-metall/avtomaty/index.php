<h2>Ящики для автоматов (IEK+E-NEXT) металлические</h2>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view; ?>_naruzh" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="12" class="b-dark title">НАРУЖНЫЕ</th>
        </tr>
        <tr class="bordered">
          <th colspan="4" class="b-yellow black title">Параметры</th>
          <th colspan="2" class="b-blue black title">IEK</th>
          <th colspan="2" class="b-purpur black title">E.Next</th>
          <th colspan="2" class="b-grey black title">E.Next IP54</th>
          <th colspan="2" class="b-green black title">Амекс</th>
        </tr>
      </thead>
      <tbody>     
        <?php foreach ($this->data['naruzh'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
            <td colspan="4" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-blue sku"><?php echo $value['sku1'] ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
            <td field="sku3" class="b-grey sku"><?php echo $value['sku3'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku3']) ?></td>
            <td field="sku4" class="b-green sku"><?php echo $value['sku4'] ?></td>
            <td class="b-green qty"><?php $this->get($value['sku4']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?= $this->view; ?>_vnutr" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="9" class="b-dark title">ВНУТРЕННИЕ</th>
        </tr>
        <tr class="bordered">
          <th colspan="3" class="b-yellow black title">Параметры</th>
          <th colspan="2" class="b-blue black title">IEK</th>
          <th colspan="2" class="b-purpur black title">E.Next</th>
          <th colspan="2" class="b-purpur black title">Амекс</th>
        </tr>
      </thead>
      <tbody>     
        <?php foreach ($this->data['vnutr'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
            <td colspan="3" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-blue sku"><?php echo $value['sku1'] ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
            <td field="sku3" class="b-green sku"><?php echo $value['sku3'] ?></td>
            <td class="b-green qty"><?php $this->get($value['sku3']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<h2>Ящики для автоматов (НОВА) металлические</h2>
<div class="wrapper">
  <div class="bbox">
    <table id="<?= $this->view; ?>_nova" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-dark red black title br">Автоматов</th>
          <th colspan="4" class="b-dark blue black title br">Наружные (навесные)</th>
          <th colspan="4" class="b-dark purpur black title br">Внутренние (встраиваемые)</th>
          <th class="b-dark red black title">Автоматов</th>
          
        </tr>
      </thead>
      <tbody>     
        <?php foreach ($this->data['nova'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td field="param1" class="b-grey option"><?php echo $value['param1'] ?></td>
            <td colspan="2" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
            <td field="sku1" class="b-blue sku"><?php echo $value['sku1'] ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
            <td colspan="2" field="name2" class="b-yellow name"><?php echo $value['name2'] ?></td>
            <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
            <td field="param1" class="b-grey option"><?php echo $value['param1'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>