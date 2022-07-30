<?php $this->nav(); ?>
<h2>Боксы пластиковые под автоматы</h2>
<table id="<?= $this->view; ?>_naruzh" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="18" class="b-dark blue title">НАРУЖНЫЕ</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="b-blue black title">Параметры</th>
      <th colspan="2" class="b-purpur black title">IEK(щрв-п)</th>
      <th colspan="2" class="b-green black title">Schneider (Mini Pragma)</th>
      <th colspan="2" class="b-grey black title">Беларусь КНС</th>
      <th colspan="2" class="b-yellow black title">Mono Electric</th>
      <th colspan="2" class="b-sea black title">Getsan/FAR с нулевой шиной</th>
      <th colspan="2" class="b-grey black title">Electro Plast (EP)</th>
      <th colspan="2" class="b-sea black title">Украина (без дверцы)</th>
      <th colspan="2" class="b-blue black title">Параметры</th>
    </tr>
  </thead>
  <tbody>
    <?php $this->data['naruzh'] = (new Order(['param2']))->run($this->data['naruzh']) ?>   
    <?php foreach ($this->data['naruzh'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] == $this->data[$key+1]['naruzh']['param2']){echo 'class="bordered"';} ?>>
        <td colspan="2" field="param2" class="b-lllgrey name"><?php echo $value['param2'] ?></td>
        <td field="sku1" class="b-purpur sku"><?php echo $value['sku1'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku1']) ?></td>
        <td field="sku2" class="b-green sku"><?php echo $value['sku2'] ?></td>
        <td class="b-green qty"><?php $this->get($value['sku2']) ?></td>
        <td field="sku3" class="b-grey sku"><?php echo $value['sku3'] ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku3']) ?></td>
        <td field="sku4" class="b-yellow sku"><?php echo $value['sku4'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku4']) ?></td>
        <td field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku5']) ?></td>
        <td field="sku6" class="b-grey sku"><?php echo $value['sku6'] ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku6']) ?></td>
        <td field="sku7" class="b-sea sku"><?php echo $value['sku7'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku7']) ?></td>
        <td colspan="2" field="param2" class="b-lllgrey name"><?php echo $value['param2'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<table id="<?= $this->view; ?>_vnutr" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="14" class="b-dark red title">ВНУТРЕННИЕ</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="b-red black title">Параметры</th>
      <th colspan="2" class="b-purpur black title">IEK(щрв-п)</th>
      <th colspan="2" class="b-green black title">Schneider (Mini Pragma)</th>
      <th colspan="2" class="b-grey black title">Беларусь КНС</th>
      <th colspan="2" class="b-yellow black title">Mono Electric</th>
      <th colspan="2" class="b-sea black title">Getsan/FAR с нулевой шиной</th>
      <th colspan="2" class="b-red black title">Параметры</th>
    </tr>
  </thead>
  <tbody>     
    <?php $this->data['vnutr'] = (new Order(['param2']))->run($this->data['vnutr']) ?>
    <?php foreach ($this->data['vnutr'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] == $this->data['vnutr'][$key+1]['param2']){echo 'class="bordered"';} ?>>
        <td colspan="2" field="param2" class="b-lllgrey name"><?php echo $value['param2'] ?></td>
        <td field="sku1" class="b-purpur sku"><?php echo $value['sku1'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku1']) ?></td>
        <td field="sku2" class="b-green sku"><?php echo $value['sku2'] ?></td>
        <td class="b-green qty"><?php $this->get($value['sku2']) ?></td>
        <td field="sku3" class="b-grey sku"><?php echo $value['sku3'] ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku3']) ?></td>
        <td field="sku4" class="b-yellow sku"><?php echo $value['sku4'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku4']) ?></td>
        <td field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku5']) ?></td>
        <td colspan="2" field="param2" class="b-lllgrey name"><?php echo $value['param2'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<!-- <table class="table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th class="b-red" colspan="10"><h2>Внутренние</h2></th>
      <th class="b-white border-0"></th>
      <th class="b-red" colspan="4"><h2>Внутренние</h2></th>
    </tr>
    <tr>
      <th colspan="2"class="b-sky left border-bottom-0"></th>
      <th class="b-violet" colspan="2">IEK(щрв-п)</th>
      <th class="b-gold" colspan="2">Schneider (Mini Pragma)</th>
      <th class="b-violet" colspan="2">Беларусь КНС</th>
      <th class="b-gold" colspan="2">Mono Electric</th>
      <th class="b-white border-0"></th>
      <th class="b-grey" colspan="4">Getsan/FAR с нулевой шиной</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"class="b-sky left name">4 модуля 1 ряд</td>
      <td class="b-violet sku">17101</td>
      <td class="b-violet qty"><?php $this->get(17101) ?></td>
      <td class="b-gold sku">17118</td>
      <td class="b-gold qty"><?php $this->get(17118) ?></td>
      <td class="b-violet sku">17401</td>
      <td class="b-violet qty"><?php $this->get(17401) ?></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green name"></td>
      <td class="b-grey sku"></td>
      <td class="b-grey qty"></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">6 модулей 1 ряд</td>
      <td class="b-violet sku">17102</td>
      <td class="b-violet qty"><?php $this->get(17102) ?></td>
      <td class="b-gold sku">17119</td>
      <td class="b-gold qty"><?php $this->get(17119) ?></td>
      <td class="b-violet sku">17402</td>
      <td class="b-violet qty"><?php $this->get(17402) ?></td>
      <td class="b-gold sku">17150</td>
      <td class="b-gold qty"><?php $this->get(17150) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">6 автоматов 1 ряд</td>
      <td class="b-grey sku">17018</td>
      <td class="b-grey qty"><?php $this->get(17018) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">8 модулей 1 ряд</td>
      <td class="b-violet sku">17103</td>
      <td class="b-violet qty"><?php $this->get(17103) ?></td>
      <td class="b-gold sku">17120</td>
      <td class="b-gold qty"><?php $this->get(17120) ?></td>
      <td class="b-violet sku">17403</td>
      <td class="b-violet qty"><?php $this->get(17403) ?></td>
      <td class="b-gold sku">17151</td>
      <td class="b-gold qty"><?php $this->get(17151) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">9 автоматов 1 ряд</td>
      <td class="b-grey sku">17019</td>
      <td class="b-grey qty"><?php $this->get(17019) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">12 модулей 1 ряд</td>
      <td class="b-violet sku">17104</td>
      <td class="b-violet qty"><?php $this->get(17104) ?></td>
      <td class="b-gold sku">17121</td>
      <td class="b-gold qty"><?php $this->get(17121) ?></td>
      <td class="b-violet sku">17404</td>
      <td class="b-violet qty"><?php $this->get(17404) ?></td>
      <td class="b-gold sku">17152</td>
      <td class="b-gold qty"><?php $this->get(17152) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">12 автоматов 1 ряд</td>
      <td class="b-grey sku">17020</td>
      <td class="b-grey qty"><?php $this->get(17020) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">16 модулей 2 ряда</td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <td class="b-violet sku">17409</td>
      <td class="b-violet qty"><?php $this->get(17409) ?></td>
      <td class="b-gold sku">17153</td>
      <td class="b-gold qty"><?php $this->get(17153) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">16 автоматов 2 ряда</td>
      <td class="b-grey sku">17011</td>
      <td class="b-grey qty"><?php $this->get(17011) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">18 модулей 1 ряд</td>
      <td class="b-violet sku">17105</td>
      <td class="b-violet qty"><?php $this->get(17105) ?></td>
      <td class="b-gold sku">17122</td>
      <td class="b-gold qty"><?php $this->get(17122) ?></td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name"></td>
      <td class="b-grey sku"></td>
      <td class="b-grey qty"></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">24 модуля 2 ряда</td>
      <td class="b-violet sku">17106</td>
      <td class="b-violet qty"><?php $this->get(17106) ?></td>
      <td class="b-gold sku">17123</td>
      <td class="b-gold qty"><?php $this->get(17123) ?></td>
      <td class="b-violet sku">17410</td>
      <td class="b-violet qty"><?php $this->get(17410) ?></td>
      <td class="b-gold sku">17154</td>
      <td class="b-gold qty"><?php $this->get(17154) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">24 автомата 2 ряда</td>
      <td class="b-grey sku">17022</td>
      <td class="b-grey qty"><?php $this->get(17022) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">36 модулей 3 ряда</td>
      <td class="b-violet sku">17107</td>
      <td class="b-violet qty"><?php $this->get(17107) ?></td>
      <td class="b-gold sku">17124</td>
      <td class="b-gold qty"><?php $this->get(17124) ?></td>
      <td class="b-violet sku">17411</td>
      <td class="b-violet qty"><?php $this->get(17411) ?></td>
      <td class="b-gold sku">17155</td>
      <td class="b-gold qty"><?php $this->get(17155) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">36 автоматов 3 ряда</td>
      <td class="b-grey sku">17023</td>
      <td class="b-grey qty"><?php $this->get(17023) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">36мод 3р белые двери</td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku">17138</td>
      <td class="b-gold qty"><?php $this->get(17138) ?></td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name"></td>
      <td class="b-grey sku"></td>
      <td class="b-grey qty"></td>
    </tr>
  </tbody>
</table> -->

<!-- <table class="table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th class="b-purpur" colspan="10"><h2>Наружные</h2></th>
      <th class="b-white border-0"></th>
      <th class="b-purpur" colspan="4"><h2>Наружные</h2></th>
    </tr>
    <tr>
      <th colspan="2"class="b-sky left border-bottom-0"></th>
      <th class="b-violet" colspan="2">IEK(щрв-п)</th>
      <th class="b-gold" colspan="2">Schneider (Mini Pragma)</th>
      <th class="b-violet" colspan="2">Беларусь КНС</th>
      <th class="b-gold" colspan="2">Mono Electric</th>
      <th class="b-white border-0"></th>
      <th class="b-grey" colspan="4">Getsan/FAR с нулевой шиной</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"class="b-sky left name">4 модуля 1 ряд</td>
      <td class="b-violet sku">17108</td>
      <td class="b-violet qty"><?php $this->get(17108) ?></td>
      <td class="b-gold sku">17130</td>
      <td class="b-gold qty"><?php $this->get(17130) ?></td>
      <td class="b-violet sku">17405</td>
      <td class="b-violet qty"><?php $this->get(17405) ?></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green name"></td>
      <td class="b-grey sku"></td>
      <td class="b-grey qty"></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">6 модулей 1 ряд</td>
      <td class="b-violet sku">17109</td>
      <td class="b-violet qty"><?php $this->get(17109) ?></td>
      <td class="b-gold sku">17131</td>
      <td class="b-gold qty"><?php $this->get(17131) ?></td>
      <td class="b-violet sku">17406</td>
      <td class="b-violet qty"><?php $this->get(17406) ?></td>
      <td class="b-gold sku">17156</td>
      <td class="b-gold qty"><?php $this->get(17156) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">6 автоматов 1 ряд</td>
      <td class="b-grey sku">17008</td>
      <td class="b-grey qty"><?php $this->get(17008) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">8 модулей 1 ряд</td>
      <td class="b-violet sku">17110</td>
      <td class="b-violet qty"><?php $this->get(17110) ?></td>
      <td class="b-gold sku">17132</td>
      <td class="b-gold qty"><?php $this->get(17132) ?></td>
      <td class="b-violet sku">17407</td>
      <td class="b-violet qty"><?php $this->get(17407) ?></td>
      <td class="b-gold sku">17157</td>
      <td class="b-gold qty"><?php $this->get(17157) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">9 автоматов 1 ряд</td>
      <td class="b-grey sku">17009</td>
      <td class="b-grey qty"><?php $this->get(17009) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">8мод 1р белые двери</td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">12 автоматов 1 ряд</td>
      <td class="b-grey sku">17010</td>
      <td class="b-grey qty"><?php $this->get(17010) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">12мод 1р прозр. двери</td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku">17139</td>
      <td class="b-gold qty"><?php $this->get(17139) ?></td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">16 автоматов 2 ряда</td>
      <td class="b-grey sku">17021</td>
      <td class="b-grey qty"><?php $this->get(17021) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">12мод 1р белые двери</td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku">17140</td>
      <td class="b-gold qty"><?php $this->get(17140) ?></td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">24 автомата 2 ряда</td>
      <td class="b-grey sku">17012</td>
      <td class="b-grey qty"><?php $this->get(17012) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">12мод 1р дымч двери</td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku">17133</td>
      <td class="b-gold qty"><?php $this->get(17133) ?></td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">36 автоматов 3 ряда</td>
      <td class="b-grey sku">17013</td>
      <td class="b-grey qty"><?php $this->get(17013) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">12мод 1р черн двери</td>
      <td class="b-violet sku">17111</td>
      <td class="b-violet qty"><?php $this->get(17111) ?></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <td class="b-violet sku">17408</td>
      <td class="b-violet qty"><?php $this->get(17408) ?></td>
      <td class="b-gold sku">17160</td>
      <td class="b-gold qty"><?php $this->get(17160) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-blue left name">11мод IP65 комб.</td>
      <td class="b-blue sku">17014</td>
      <td class="b-blue qty"><?php $this->get(17014) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">16 модулей 2 ряда</td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <td class="b-violet sku">17412</td>
      <td class="b-violet qty"><?php $this->get(17412) ?></td>
      <td class="b-gold sku">17161</td>
      <td class="b-gold qty"><?php $this->get(17161) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-blue name">Mutlusan (60-39-86) IP56</td>
      <td class="b-blue sku">18330</td>
      <td class="b-blue qty"><?php $this->get(18330) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">18 модулей 1 ряд</td>
      <td class="b-violet sku">17112</td>
      <td class="b-violet qty"><?php $this->get(17112) ?></td>
      <td class="b-gold sku">17134</td>
      <td class="b-gold qty"><?php $this->get(17134) ?></td>
      <td class="b-violet sku"></td>
      <td class="b-violet qty"></td>
      <td class="b-gold sku"></td>
      <td class="b-gold qty"></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">5 модулей 1 ряд IP54</td>
      <td class="b-grey sku">17015</td>
      <td class="b-grey qty"><?php $this->get(17015) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">24 модуля 2 ряда</td>
      <td class="b-violet sku">17113</td>
      <td class="b-violet qty"><?php $this->get(17113) ?></td>
      <td class="b-gold sku">17135</td>
      <td class="b-gold qty"><?php $this->get(17135) ?></td>
      <td class="b-violet sku">17413</td>
      <td class="b-violet qty"><?php $this->get(17413) ?></td>
      <td class="b-gold sku">17158</td>
      <td class="b-gold qty"><?php $this->get(17158) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">9 модулей 1 ряд IP54</td>
      <td class="b-grey sku">17016</td>
      <td class="b-grey qty"><?php $this->get(17016) ?></td>
    </tr>
    <tr>
      <td colspan="2"class="b-sky left name">36 модуля 3 ряда</td>
      <td class="b-violet sku">17114</td>
      <td class="b-violet qty"><?php $this->get(17114) ?></td>
      <td class="b-gold sku">17136</td>
      <td class="b-gold qty"><?php $this->get(17136) ?></td>
      <td class="b-violet sku">17414</td>
      <td class="b-violet qty"><?php $this->get(17414) ?></td>
      <td class="b-gold sku">17159</td>
      <td class="b-gold qty"><?php $this->get(17159) ?></td>
      <th class="b-white border-0"></th>
      <td colspan="2" class="b-green left name">12 модулей 1 ряд IP54</td>
      <td class="b-grey sku">17017</td>
      <td class="b-grey qty"><?php $this->get(17017) ?></td>
    </tr>

  </tbody>
</table> -->
