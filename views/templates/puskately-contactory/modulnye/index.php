
<table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="18" class="title">Контакторы модульные <h5>220В</h5></th>
    </tr>
    <tr class="bordered">
      <th class="b-red black title">Ток, А</th>
      <th class="b-green black title">Контакты</th>
      <th colspan="4" class="b-blue black title">Schneider</th>
      <th colspan="4" class="b-yellow black title">IEK</th>
      <th colspan="4" class="b-grey black title">ENEXT</th>
      <th colspan="4" class="b-purpur black title">ETI</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->data['tab1'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>" <? if($value['param1'] !== $this->data['tab1'][$key+1]['param1']){ echo 'class="bordered"'; } ?>>
        <td field="param1" class="b-red title black"><?php echo $value['param1'] ?></td>
        <td field="param2" class="b-green option"><?php echo $value['param2']; ?></td>

        <td colspan="2" field="name1" class="b-blue name"><?php echo $value['name1']; ?></td></td>
        <td field="sku1" class="b-blue sku"><?php echo $value['sku1']; ?></td></td>
        <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>

        <td colspan="2" field="name2" class="b-yellow name"><?php echo $value['name2']; ?></td></td>
        <td field="sku2" class="b-yellow sku"><?php echo $value['sku2']; ?></td></td>
        <td class="b-yellow qty"><?php $this->get($value['sku2']); ?></td>

        <td colspan="2" field="name3" class="b-grey name"><?php echo $value['name3']; ?></td></td>
        <td field="sku3" class="b-grey sku"><?php echo $value['sku3']; ?></td></td>
        <td class="b-grey qty"><?php $this->get($value['sku3']); ?></td>

        <td colspan="2" field="name4" class="b-purpur name"><?php echo $value['name4']; ?></td></td>
        <td field="sku4" class="b-purpur sku"><?php echo $value['sku4']; ?></td></td>
        <td class="b-purpur qty"><?php $this->get($value['sku4']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<table id="<?= $this->view; ?>_tab2" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr class="bordered">
      <th colspan="6" class="title">Доп. контакты</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->data['tab2'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>">
        <td colspan="4" field="param2" class="b-green name" style="font-size: 140%;"><?php echo $value['param2']; ?></td>

        <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td></td>
        <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>