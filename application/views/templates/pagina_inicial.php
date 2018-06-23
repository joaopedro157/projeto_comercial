  <?php $mrrTotal = 599993; $mrr2018 = 179406.47; ?>

<div>
    <!-- Conteudo da pagina -->
    <div>

        <!-- Texto da parte de cima, MRR, MQL e etc.. -->

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget style1">
                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <h2> MRR </h2>
                                <h2 class="font-bold">
                                    <?php 
                                echo "R$", number_format($valor['0']['SUM(value)'] +402.20 ,2, ',' , '.');
                                 ?> </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-info pull-right"><?php echo date("m/y"); ?></span>
                            <h5>Ticket Medio</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 class="no-margins">
                                <?php echo "R$",number_format(($valor['0']['SUM(value)']+402.20)/$nConta['0']['count(id)'],2, ',' , '.'); ?>
                            </h1>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <span class="label label-info pull-right"><?php echo date("m/y"); ?></span>
                            <h5>Contas Vendidas</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 class="no-margins">
                                <?php echo $nConta['0']['count(id)'] ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <span class="label label-success pull-right"><?php echo date("m/y"); ?></span>
                            <h5>Ciclo de Venda Médio</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 class="no-margins">
                                <?php echo round($media_do_ciclo['0']['SUM(ciclo_venda)/COUNT(id)']); ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Texto do grafico e % lateral -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Projeção da Meta</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div>
                                            <canvas id="lineChart" height="70"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="stat-list">
                                        <li>
                                            <h2 class="no-margins">R$142.221,50</h2>
                                            <small>2016</small>
                                            <div class="stat-percent">71% </div>
                                            <div class="progress progress-mini">
                                                <div style="width: 71%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">R$294.422,80</h2>
                                            <small>2017</small>
                                            <div class="stat-percent">74% </div>
                                            <div class="progress progress-mini">
                                                <div style="width: 74%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">
                                                <?php echo "R$", number_format($valor['0']['SUM(value)'] + $mrr2018,2, ',' , '.'); ?>
                                            </h2>
                                            <small>2018</small>
                                            <div class="stat-percent">
                                                <?php echo round(($valor['0']['SUM(value)'] + $mrr2018)*100/$mrrTotal)."%"  ?> </div>
                                            <div class="progress progress-mini">
                                                <div style="width: 35%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="table-responsive">
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Closer</th>
                                <th>Meta de Vendas</th>
                                <th>Vendas</th>
                                <th>Novas Contas</th>
                                <th>Ticket Médio</th>
                                <th>Ciclo de venda do mês(dias)</th>
                                <th>% da meta</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($closers as $dados1): ?>
                            <tr>
                                <td>
                                    <?php echo $dados1['closer'];  ?>
                                </td>
                                <td></td>
                                <td>
                                    <?php echo "R$", number_format($dados1['Total Vendido'],2, ',' , '.');  ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $dados1['Total de Contas'];  ?>
                                </td>
                                <td class="text-center">
                                    <?php echo "R$", number_format($dados1['Total Vendido']/$dados1['Total de Contas'],2, ',' , '.');  ?>
                                </td>
                                <td class="text-center">
                                    <?php echo round($dados1['Ciclo de Venda']/$dados1['Total de Contas']);?>
                                </td>
                                <td></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" align="center">
                        <h5>Ranking # MRR mês</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Closer</th>
                                    <th>MRR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $posicao = 1;  ?>
                                <?php foreach ($mrrRankin as $mrrR):?>

                                <tr>
                                    <td>
                                        <?php echo $posicao; ?>
                                    </td>
                                    <td>
                                        <?php echo $mrrR['closer']; ?>
                                    </td>
                                    <td>
                                        <?php echo "R$", number_format($mrrR['Total Vendido'],2, ',' , '.');  ?>
                                    </td>
                                    <?php $posicao++; ?>
                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Ranking # tkt médio mês </h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Closer</th>
                                    <th>tkt médio</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $posicao2 = 1;  ?>
                                <?php foreach ($tktMedio as $tkt):?>

                                <tr>
                                    <td>
                                        <?php echo $posicao2; ?>
                                    </td>
                                    <td>
                                        <?php echo $tkt['closer']; ?>
                                    </td>
                                    <td>
                                        <?php echo "R$", number_format($tkt['tkt medio'],2, ',' , '.');  ?>
                                    </td>
                                    <?php $posicao2++ ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" align="center">
                                        <h5>Ranking # ciclo médio mês</h5>
                                    </div>
                                    <div class="ibox-content">

                                        <table class="table table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Closer</th>
                                                    <th>dias</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $posicao3 = 1;  ?>
                                                <?php foreach ($ciclo_medio as $ciclo ):?>

                                                <tr>
                                                    <td>
                                                        <?php echo $posicao3 ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $ciclo['closer']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo round($ciclo['ciclo'])?>
                                                    </td>
                                                    <?php $posicao3++ ?>
                                                </tr>

                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                                    <div class="wrapper wrapper-content animated fadeInRight">
                                        <div class="col-lg-6">
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-title">
                                                    <h5>Ranking # acúmulo 2018 </h5>
                                                </div>
                                                <div class="ibox-content">

                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Closer</th>
                                                                <th>Total Vendido</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Ricardo</td>
                                                                <td>R$23.067,99</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Felipe</td>
                                                                <td>R$17.121.28</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Francis</td>
                                                                <td>R$16.481,50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Weslei</td>
                                                                <td>R$15.723,50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Carioca</td>
                                                                <td>R$14.250,25 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Victor</td>
                                                                <td>R$13.538,50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>Patrick</td>
                                                                <td>R$11.414,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Barbara</td>
                                                                <td>R$11.242,36</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>João</td>
                                                                <td>R$9.413,90</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>




                                    </div>