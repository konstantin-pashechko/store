<?php $this->nav() ?>
<div class="container">
  <table id="<?php echo $this->view ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="16" class="title">КУРСК</th>
      </tr>
      <tr>
          <th class="b-red"></th>
          <th colspan="2" class="b-grey">АП 50 ЗМТ</th>
          <th colspan="2" class="b-green">АЕ 2046 М</th>
          <th colspan="2" class="b-yellow">АЕ 2046</th>
          <th colspan="2" class="b-blue ">АЕ 2056 М</th>
          <th colspan="2" class="b-purpur">ВА 57ф35</th>
          <th colspan="2" class="b-sea">ВА 5135 М</th>
          <th colspan="2" class="b-grey">ВА 57-39Б</th>
          <th class="b-red"></th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($this->data as $value): ?>
        <tr id="<?php echo $value['id'];?>">
            <td field="param0" class="b-red name"><val><?php echo floatval($value['param0']) ?></val> А</td>

            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>

            <td field="sku2" class="b-green sku"><?php echo $value['sku2'] ?></td>
            <td class="b-green qty"><?php $this->get($value['sku2']) ?></td>

            <td field="sku3" class="b-yellow sku"><?php echo $value['sku3'] ?></td>
            <td class="b-yellow qty"><?php $this->get( $value['sku3']) ?></td>

            <td field="sku4" class="b-blue sku"><?php echo $value['sku4'] ?></td>
            <td class="b-blue qty"><?php $this->get($value['sku4']) ?></td>

            <td field="sku5" class="b-purpur sku"><?php echo $value['sku5'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku5']) ?></td>

            <td field="sku6" class="b-sea sku"><?php echo $value['sku6'] ?></td>
            <td class="b-sea qty"><?php $this->get($value['sku6']) ?></td>

            <td field="sku7" class="b-grey sku"><?php echo $value['sku7'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku7']) ?></td>

            <td class="b-red name"><?php echo floatval($value['param0']) ?> А</td>

        </tr>
    <?php endforeach; ?>
</tbody>
</table>
</div>
