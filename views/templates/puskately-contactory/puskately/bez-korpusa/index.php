<div class="box15" style="border-top: 1px solid #fff;">
  <?php include $this->nav; ?>
  <div>
    <table class="tl-fixed table table-dark table-striped table-bordered table-sm" style="margin-bottom: 0;">
      <thead>
        <tr>
          <th colspan="9" class="title">Пускатели, Контакторы</th>
        </tr>
        <tr class="bordered">
          <th class="title black b-red">Ток (А)</th>
          <th class="title black b-green">Доп.контакты</th>
          <th class="title black b-yellow">Напряж-е (В)</th>
          <th colspan="3" class="title black b-blue">АСКО</th>
          <th colspan="3" class="title black b-purpur">IEK</th>
          <!-- <th colspan="3" class="title black b-sea">ETI</th> -->
        </tr>
      </thead>
    </table>    
  </div>
  <div style="height: 1000px; overflow-y: scroll; margin-right:-1.6%">
    <table id="<?= $this->view ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <tbody>

        <?php foreach ($this->data as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if(($value['param2'] !== $this->data[$key+1]['param2'])
            ||($value['param1'] !== $this->data[$key+1]['param1']))
            {echo 'class="bordered"';} ?>>

            <td field="param1" class="b-red title black"><?php echo $value['param1'] ?></td>
            <td field="param2" class="b-green option"><?php echo $value['param2']; ?></td>
            <td field="param3" class="b-yellow option"><?php echo $value['param3']; ?></td>
            <td field="name1" class="b-blue option"><?php echo $value['name1']; ?></td></td>
            <td field="sku1" class="b-blue sku"><?php echo $value['sku1']; ?></td></td>
            <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>
            <td field="name2" class="b-purpur option"><?php echo $value['name2']; ?></td></td>
            <td field="sku2" class="b-purpur sku"><?php echo $value['sku2']; ?></td></td>
            <td class="b-purpur qty"><?php $this->get($value['sku2']); ?></td>
<!--           <td field="name3" class="b-sea material"><?php echo $value['name3']; ?></td></td>
          <td field="sku3" class="b-sea manufacturer"><?php echo $value['sku3']; ?></td></td>
          <td class="b-sea qty"><?php $this->get($value['sku3']); ?></td> -->
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>