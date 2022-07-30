<?php include $this->nav; ?>

<div class="container">

  <table class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="7" class="title blue center b-dgrey">Старт-Стоп</th>
      </tr>
    </thead>
    <tbody>
      <tr class="bordered">
        <td class="stop title black b-red">АСКО</td>
        <td class="b-green black title">2 кнопки</td>
        <td class="b-lgreen black title">1NO+<span class="red">1NC</span></td>
        <td colspan="2" class="b-yellow name">ХВ2-ВW 8375 с подсветкой</td>
        <td class="b-grey sku">16017</td>
        <td class="b-grey qty"><?php $this->get(16017) ?></td>
      </tr>
      <tr>
        <td rowspan="2" class="stop title black b-brown">IEK</td>        
        <td class="b-green black title">2 кнопки</td>
        <td class="b-lgreen black title">1NO+<span class="red">1NC</span></td>        
        <td colspan="2" class="b-yellow name">АРВВ-22N с подсветкой</td>
        <td class="b-grey sku">16058</td>
        <td class="b-grey qty"><?php $this->get(16058) ?></td>
      </tr>
      <tr>
        <td class="b-green black title">2 кнопки</td>
        <td class="b-lgreen black title">1NO+<span class="red">1NC</span></td>        
        <td colspan="2" class="b-yellow name">РРВВ-30N с подсветкой</td>
        <td class="b-grey sku"></td>
        <td class="b-grey qty"><?php $this->get() ?></td>
      </tr>
    </tbody>
  </table>
</div>


