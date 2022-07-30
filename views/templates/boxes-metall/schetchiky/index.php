<h2>Ящики для автоматов (НОВА) металлические</h2>
<div class="wrapper">
  <div class="bbox">
    <table id="<?= $this->view; ?>_nova" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-dark red black title br">Автоматов</th>
          <th colspan="5" class="b-dark blue black title br">Наружные (навесные)</th>
          <th colspan="5" class="b-dark purpur black title br">Внутренние (встраиваемые)</th>
          <th class="b-dark red black title">Автоматов</th>          
        </tr>
      </thead>
      <tbody>    
        <?php $this->data['nova'] = (new Order(['name1']))->run($this->data['nova']) ?> 
        <?php foreach ($this->data['nova'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td field="param2" class="b-grey name"><?php echo $value['param2'] ?></td>
            <td colspan="3" field="name1" class="b-yellow name"><?php echo $this->replace($value['name1']) ?></td>
            <td field="sku1" class="b-blue sku"><?php echo $value['sku1'] ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
            <td colspan="3" field="name2" class="b-yellow name"><?php echo $value['name2'] ?></td>
            <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
            <td field="param2" class="b-grey name"><?php echo $value['param2'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<h2>Ящики для автоматов (E.NEXT) металлические</h2>
<div class="wrapper">
  <div class="container">
    <table id="<?= $this->view; ?>_enext" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th colspan="4" class="b-dark red black title">E.Next</th>        
        </tr>
      </thead>
      <tbody>    
        <?php foreach ($this->data['enext'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="2" field="name1" class="b-yellow name"><?php echo $this->replace($value['name1']) ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
