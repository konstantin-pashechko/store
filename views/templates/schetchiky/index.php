<div class="container">
  <h2>Счетчики</h2>
  <table id="<?=$this->view?>_tab1" class="tl-fixed table table-dark table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="8" class="title b-red">ЭНЕРГОМЕРА</th>
      </tr>
    </thead>
    <tbody>
      <?php $this->data['tab1'] = (new Order(['param2'=>'asc','param4'=>'desc']))->run($this->data['tab1']) ?>
      <?php foreach ($this->data['tab1'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if(($value['param2'] !== $this->data['tab1'][$key+1]['param2'])){echo 'class="bordered"';} ?>>
          <td field="param2" class="b-green option"><?php echo $value['param2'] ?></td>
          <td field="param4" class="b-blue option"><?php echo $value['param4'] ?></td>

          <td colspan="4" field="name1" class="b-yellow name"><?php echo $this->replace($value['name1']) ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

    <table id="<?=$this->view?>_tab2" class="tl-fixed table table-dark table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="8" class="title b-red">ПРОМСНАБИНВЕСТ</th>
      </tr>
    </thead>
    <tbody>
      <?php $this->data['tab2'] = (new Order(['param2'=>'asc','param4'=>'desc']))->run($this->data['tab2']) ?>
      <?php foreach ($this->data['tab2'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if(($value['param2'] !== $this->data['tab2'][$key+1]['param2'])){echo 'class="bordered"';} ?>>
          <td field="param2" class="b-green option"><?php echo $value['param2'] ?></td>
          <td field="param4" class="b-blue option"><?php echo $value['param4'] ?></td>

          <td colspan="4" field="name1" class="b-yellow name"><?php echo $this->replace($value['name1']) ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<!--   <table class="tl-fixed table table-dark table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="title b-red">ЭНЕРГОМЕРА</th>
      </tr>
    </thead>
    <tbody>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф ЦЕ 6807Б-U M6P5 5-60А на DIN-рейку модульный Актив (10 уп)</td>
        <td class="sku">15201</td>
        <td class="qty"><?php $this->get(15201) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф ЦЕ 6807Б-U M6Ш6 5-60А Актив (10 уп)</td>
        <td class="sku">15202</td>
        <td class="qty"><?php $this->get(15202) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф СЕ 102-U s6 145 AV мнт 5-60А Актив (10 уп)</td>
        <td class="sku">15203</td>
        <td class="qty"><?php $this->get(15203) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф ЦЕ 102 s7 145 JOVFLZ мнт 5-60А Актив (10 уп)</td>
        <td class="sku">15205</td>
        <td class="qty"><?php $this->get(15205) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф CE 102-U s7 146 5-60А JOVFLZ Актив (10 уп)</td>
        <td class="sku">15206</td>
        <td class="qty"><?php $this->get(15206) ?></td>
      </tr>

      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф ЦЕ 6804-U/1 MP32 1-7.5А на DIN-рейку (трансф) универсал Актив (8 уп)</td>
        <td class="sku">15210</td>
        <td class="qty"><?php $this->get(15210) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3ф ЦЕ 6804-U/1 MР32 5-60А универсальный Актив (8 уп)</td>
        <td class="sku">15208</td>
        <td class="qty"><?php $this->get(15208) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3ф ЦЕ 6804-U/1 MР32 10-100А DIN-рейку универсал Актив (8 уп)</td>
        <td class="sku">15209</td>
        <td class="qty"><?php $this->get(15209) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3ф ЦЕ 6804-U/1 MР31 5-60А DIN-рейку модульный Актив (8 уп)</td>
        <td class="sku">15218</td>
        <td class="qty"><?php $this->get(15218) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3ф ЦЕ 6804-U/1 MР31 10-100А DIN-рейку модульный Актив (8 уп)</td>
        <td class="sku">15217</td>
        <td class="qty"><?php $this->get(15217) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U А R33 043 JAZ мнт 5-10А (трансф) DIN-рейку модульный Актив</td>
        <td class="sku">15213</td>
        <td class="qty"><?php $this->get(15213) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U А S31 043 JAVZ мнт 5-10А (трансф) Актив</td>
        <td class="sku">15214</td>
        <td class="qty"><?php $this->get(15214) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U А R33 146 JAVZ мнт 5-100А DIN-рейку модульный Актив (4 уп)</td>
        <td class="sku">15215</td>
        <td class="qty"><?php $this->get(15215) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U А S31 146 JAVZ мнт 5-100А Актив</td>
        <td class="sku">15216</td>
        <td class="qty"><?php $this->get(15216) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U АR R33 543 JAYVZ мнт 5-10А DIN-рейку Актив/Реактив</td>
        <td class="sku">15223</td>
        <td class="qty"><?php $this->get(15223) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U АR S31 543 JAYVZ мнт 5-10А DIN-рейку Актив/Реактив</td>
        <td class="sku">15229</td>
        <td class="qty"><?php $this->get(15229) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U АR R33 746 JAYVZ мнт 5-100А DIN-рейку Актив/Реактив</td>
        <td class="sku">15222</td>
        <td class="qty"><?php $this->get(15222) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U АR S33 745 JAYVZ мнт 5-100А DIN-рейку Актив/Реактив</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СЕ 303-U АR R31 746  J (5-100А) DIN-рейку</td>
        <td class="sku">15228</td>
        <td class="qty"><?php $this->get(15228) ?></td>
      </tr>
      <tr class="b-green">
        <td colspan="3" class="name">Індикатор магнітного пливу ІВМП-3-2 типу "ІН-АТ"</td>
        <td class="sku">15621</td>
        <td class="qty"><?php $this->get(15621) ?></td>
      </tr>
    </tbody>
  </table> -->
  <!-- <table class="tl-fixed table table-dark table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="title b-blue">ПРОМСНАБИНВЕСТ</th>
      </tr>
    </thead>
    <tbody>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф СИСТЕМА -ОЕ 009 NFH (5-60А) электрон</td>
        <td class="sku">15001</td>
        <td class="qty"><?php $this->get(15001) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф СИСТЕМА-ОЕ  009 Мнт. (5-60А)VATKY</td>
        <td class="sku">15004</td>
        <td class="qty"><?php $this->get(15004) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф СИСТЕМА-ОЕ  009 VATKYP Мнт. С реле нагр. 5-60 А</td>
        <td class="sku">15007</td>
        <td class="qty"><?php $this->get(15007) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СИСТЕМА-ОЕ 008 NFH (5-50А )</td>
        <td class="sku">15002</td>
        <td class="qty"><?php $this->get(15002) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СИСТЕМА-ОЕ-008 5-100А NFH</td>
        <td class="sku">15003</td>
        <td class="qty"><?php $this->get(15003) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СИСТЕМА-ОЕ  008 Мнт. (5-100А) ARTIK01 а/р</td>
        <td class="sku">15005</td>
        <td class="qty"><?php $this->get(15005) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СИСТЕМА-ОЕ 008 Мнт. Трансф.5-10А ARTIK04 а/р</td>
        <td class="sku">15006</td>
        <td class="qty"><?php $this->get(15006) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СИСТЕМА-ОЕ 008 ARTIKP  Мнт. С реле нагр. Трансф.  5-100А а/р</td>
        <td class="sku">15008</td>
        <td class="qty"><?php $this->get(15008) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СИСТЕМА-ОЕ-008 ARTIKPG01</td>
        <td class="sku">15009</td>
        <td class="qty"><?php $this->get(15009) ?></td>
      </tr>
    </tbody>
  </table> -->

  <table class="tl-fixed table table-dark table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="title b-blue">КОММУНАР</th>
      </tr>
    </thead>
    <tbody>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф СО-ЭА15О многотариф</td>
        <td class="sku">15506</td>
        <td class="qty"><?php $this->get(15506) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф СО-ЭА10ДО 5-60А одноэлемен</td>
        <td class="sku">15501</td>
        <td class="qty"><?php $this->get(15501) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф СО-ЭА10ДИ 5-60А двуэлем. с цифр. экраном</td>
        <td class="sku">15512</td>
        <td class="qty"><?php $this->get(15512) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СТ-ЭА12ДТ трансформаторного включ</td>
        <td class="sku">15503</td>
        <td class="qty"><?php $this->get(15503) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СТ-ЭА12Д1 5-60А прямого включ</td>
        <td class="sku">15508</td>
        <td class="qty"><?php $this->get(15508) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СТ-ЭА12Д2 5-100А прямого включ</td>
        <td class="sku">15504</td>
        <td class="qty"><?php $this->get(15504) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СТ-ЭА12Д2И 5-100А прямого включ</td>
        <td class="sku">15509</td>
        <td class="qty"><?php $this->get(15509) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф СТ-ЭА12Д  5-120А прямого включ</td>
        <td class="sku">15505</td>
        <td class="qty"><?php $this->get(15505) ?></td>
      </tr>
      <tr class="b-green">
        <td colspan="3" class="name">ЛЕТ 01-2022А-NOS01T (AT) 100A 3ф многотариф</td>
        <td class="sku">15507</td>
        <td class="qty"><?php $this->get(15507) ?></td>
      </tr>
      <tr class="b-green">
        <td colspan="3" class="name">ЛЕТ 01 2322R-NOS02T  120А актив-реактив  многотар</td>
        <td class="sku">15514</td>
        <td class="qty"><?php $this->get(15514) ?></td>
      </tr>
      <tr class="b-green">
        <td colspan="3" class="name">ЛЕТ 01 2121R-LOS02S</td>
        <td class="sku">15513</td>
        <td class="qty"><?php $this->get(15513) ?></td>
      </tr>
      <tr class="b-green">
        <td colspan="3" class="name">ЛЕТ 01 2111R-NOS02T</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
      <tr class="b-green">
        <td colspan="3" class="name">ЛЕТ 01 2022R-LOS22S c реле</td>
        <td class="sku">15511</td>
        <td class="qty"><?php $this->get(15511) ?></td>
      </tr>
      <tr class="b-green">
        <td colspan="3" class="name">ЛЕТ 01 2022R-LOS22S c реле и модемом</td>
        <td class="sku">15515</td>
        <td class="qty"><?php $this->get(15515) ?></td>
      </tr>
    </tbody>
  </table>

  <table class="tl-fixed table table-dark table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="title b-red">НИК</th>
      </tr>
    </thead>
    <tbody>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф НІК 2100 АР2Т. 1000.С. 11  (5-60)А  (многотариф) Актив</td>
        <td class="sku">15607</td>
        <td class="qty"><?php $this->get(15607) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф НІК 2102-02 М2В 220В 5-60А актив</td>
        <td class="sku">15612</td>
        <td class="qty"><?php $this->get(15612) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф НІК 2102-02 1,0 220В (5-60)А 6400 М1В Актив</td>
        <td class="sku">15601</td>
        <td class="qty"><?php $this->get(15601) ?></td>
      </tr>
      <tr class="b-lyellow">
        <td colspan="3" class="name">1Ф НІК 2102-01.Е2Т 220В (5-60)А Мнт Актив</td>
        <td class="sku">15602</td>
        <td class="qty"><?php $this->get(15602) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2301 АР2.0000.0.11 прямого включения Актив</td>
        <td class="sku">15603</td>
        <td class="qty"><?php $this->get(15603) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2301 АР3.0000.0.11 (5-120А) Актив</td>
        <td class="sku">15611</td>
        <td class="qty"><?php $this->get(15611) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2301 АТ.0000.0.11 (5-10А)</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 АРП2 1100 3х220/380 5-60А) актив/реактив</td>
        <td class="sku">15604</td>
        <td class="qty"><?php $this->get(15604) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 ARP6. 1000.М.11 3х220/380  актив/реактив</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 ARP3. 1000.М.11 3х220/380  актив/реактив</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 ART.1000.M.11 3х220/380В (5-10А) актив/реактив, Мнт</td>
        <td class="sku">15610</td>
        <td class="qty"><?php $this->get(15610) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 ART.1000.M.11 3х220/380В (5-60А) актив/реактив, Мнт</td>
        <td class="sku">15605</td>
        <td class="qty"><?php $this->get(15605) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 ARTT.1200.M.11 5-120А актив/реактив Мнт</td>
        <td class="sku">15608</td>
        <td class="qty"><?php $this->get(15608) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 AR6T.1200.MC.11 5-80А актив</td>
        <td class="sku">15609</td>
        <td class="qty"><?php $this->get(15609) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 AR6T.1802.MC.11 5-80А актив</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">3Ф НІК 2303 AР6T.1802.МС21 3х220/380 5-80А актив</td>
        <td class="sku">15613</td>
        <td class="qty"><?php $this->get(15613) ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">НИК 2104 АР2Т.1802.МС.11</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
      <tr class="b-dyellow">
        <td colspan="3" class="name">Ел. лічильник НІК 2303 ART.1200.M.11 3ф. 3х220/380В</td>
        <td class="sku"></td>
        <td class="qty"><?php $this->get() ?></td>
      </tr>
    </tbody>
  </table>
</div>

