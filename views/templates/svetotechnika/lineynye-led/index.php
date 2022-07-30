<style>
.wrapper { display: flex; justify-content: space-between;} 
.box { width: 48vw; }
</style>
<?php //$this->dump($this->data); ?>
<div class="wrapper">
  <div class="box">
    <h2>Линейные LED</h2>
    <table id="<?php echo $this->view ?>_led" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="title">Размер</th>
          <th class="title">Тип</th>
          <th class="title">Мощность</th>
          <th colspan="3" class="title">Проиводитель, наименование</th>
          <th class="title">кол-во</th>
          <th class="title">артикул</th>
        </tr>
      </thead>
      <?php $this->data['led'] = (new Order(['param1' => 'asc','param2' => 'desc']))->run($this->data['led']); ?>
      <tbody>
        <?php //$net = 1; ?>
        <?php foreach ($this->data['led'] as $key => $value): ?>

          <tr id="<?php echo $value['id'];?>"<?php if(

            ($value['param1'] !== $this->data['led'][$key+1]['param1'])

            ){echo 'class="bordered"';} ?>>

            <td field="param1" class="<?php echo $this->net($net); ?>" ><?php echo $value['param1'] ?></td>
            <td field="param2" class="<?php echo $this->net($net); ?>"><?php echo $value['param2'] ?></td>
            <td field="param3" class="<?php echo $this->net($net); ?>"><val><?php echo $value['param3'] ?></val> Вт</td>

            <td field="name1" colspan="3" class="<?php echo $this->net($net); ?> name"><?php echo $this->replace($value['name1']) ?></td>
            <td class="<?php echo $this->net($net); ?> qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku1" class="<?php echo $this->net($net); ?> sku"><?php echo $value['sku1'] ?></td>
          </tr>
          <?php if($value['param2'] !== $this->data['led'][$key+1]['param2']){$net = !$net;} ?>
        <?php endforeach; ?>
      </tbody>
    </table>
    <h2>Мебельные</h2>
    <table id="<?php echo $this->view ?>_meb" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class=" ">Мощность</th>
          <th class=" ">Размер</th>
          <th colspan="3" class="">Проиводитель, наименование</th>
          <th class="">кол-во</th>
          <th class="">артикул</th>
        </tr>
      </thead>
      <tbody>
        <?php //$this->dump($this->data) ?>
        <?php foreach ($this->data['meb'] as $key => $value): ?>

          <tr id="<?php echo $value['id'];?>"<?php if(

            ($value['param1'] !== $this->data[2][$key+1]['param1'])

            ){echo 'class="bordered"';} ?>>

            <td field="param1"><val><?php echo $value['param1'] ?></val> Вт</td>
            <td field="param3" class=" "><?php echo $value['param3'] ?></td>
            <td field="name1" colspan="3" class="name   name"><?php echo $this->replace($value['name1']) ?></td>
            <td class="qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku1" class="sku"><?php echo $value['sku1'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="box">
    <h2>Корпуса</h2>
    <table id="<?php echo $this->view ?>_korp" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th colspan="3" class=" ">Корпус под линейные лампы LED</th>
          <th class=" ">кол-во</th>
          <th class=" ">артикул</th>
        </tr>
      </thead>
      <?php $this->data['korp'] = (new Order(['name1']))->run($this->data['korp']); ?>
      <tbody>
        <?php foreach ($this->data['korp'] as $key => $value): ?>

          <tr id="<?php echo $value['id'];?>">

            <td field="name1" colspan="3" class="name  "><?php echo $this->replace($value['name1']) ?></td>
            <td class="   qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku1" class="   sku"><?php echo $value['sku1'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <h2>Настенные</h2>
    <table id="<?php echo $this->view ?>_nast" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th colspan="3" class=" ">Корпус настенный под люминисцентные лампы</th>
          <th class=" ">кол-во</th>
          <th class=" ">артикул</th>
        </tr>
      </thead>
      <?php //$this->dump($this->data); ?>
      <tbody>
        <?php foreach ($this->data['nast'] as $key => $value): ?>

          <tr id="<?php echo $value['id'];?>">
            <td field="name1" colspan="3" class="name  "><?php echo $this->replace($value['name1']) ?></td>
            <td class="  qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku1" class="   sku"><?php echo $value['sku1'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
