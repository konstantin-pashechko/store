<div class="box5">
  <table id="<?php echo $this->view ?>_tab1" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="12" class="title b-dark white"> Б А Т А Р Е Й К И </th>
      </tr>
      <tr>
        <th colspan="6" class="b-blue title black"> E T R O N </th>
        <th colspan="6" class="b-green title black"> V I D E X </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->data['tab1'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>">
            <td colspan="4" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>

            <td colspan="4" field="name2" class="b-yellow name"><?php echo $value['name2'] ?></td>
            <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
          </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <table id="<?php echo $this->view ?>_tab2" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="12" class="title b-dark red"> А К К У М У Л Я Т О Р Ы </th>
      </tr>
      <tr>
        <th colspan="6" class="b-blue title black"> E T R O N </th>
        <th colspan="6" class="b-green title black"> V I D E X </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->data['tab2'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>">
            <td colspan="4" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>

            <td colspan="4" field="name2" class="b-yellow name"><?php echo $value['name2'] ?></td>
            <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
          </tr>
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>