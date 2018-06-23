<?php 
                //numeros que o vendedor fez até 05/2018
                $francis05 = 17259.50;
                $francisContas = 32;    
        ?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Closer</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo asset() ?>index.html">Home</a>
            </li>
            <li>
                <a>Closers</a>
            </li>
            <li class="active">
                <strong>Weslei</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">


    <div class="row m-b-lg m-t-lg">
        <div class="col-md-3">
            <div class="ibox-content text-center">
                <h1>Weslei Amorim</h1>
                <div class="largura col-xs-12">
                    <div class="profile-image">
                        <img src="img/francis-nova.png" class="img-circle circle-border m-b-md" alt="profile">
                    </div>
                </div>
                <h2>
                    <p class="font-bold">Closer</p>
                </h2>
            </div>
        </div>

        <div class="col-md-6 text-center">
            <table class="table big m-b-xs">
                <tbody>
                    <tr>
                        <td>
                            <h4>Tick Medio
                                <p>
                            </h4>
                            <h3><strong><?php echo "R$", number_format($contas_vendedor['0']['total_vendido']/$contas_vendedor['0']['contas_vendidas'],2, ',' , '.')   ?></strong></h3>
                        </td>
                        <td>
                            <h4>% da Meta
                                <p>
                            </h4>
                            <h3><strong><?php echo round($contas_vendedor['0']['total_vendido']*100/4500) , "%" ?></strong></h3>
                        </td>
                        <td>
                            <h4> Meta
                                <p>
                            </h4>
                            <h3><strong>R$4.500,00</strong></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Contas Vendidas
                                <p>
                            </h4>
                            <h3><strong><?php echo $contas_vendedor['0']['contas_vendidas'] ?> </strong></h3>
                        </td>
                        <td>
                            <h4>Nº Ranking MRR
                                <p>
                            </h4>
                            <h3><strong>1</strong> </h3>
                        </td>

                        <td>
                            <h4> Nº Rankin Contas
                                <p>
                            </h4>
                            <h3><strong>1</strong> </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4> MRR Total
                                <p>
                            </h4>
                            <h3><strong><?php echo "R$", number_format($francis05+$contas_vendedor['0']['total_vendido'],2, ',' , '.')?></strong> </h3>
                        </td>
                        <td>
                            <h4>Média de Venda</h4>
                            <h3><strong><?php echo "R$", number_format(($francis05+$contas_vendedor['0']['total_vendido'])/6,2, ',' , '.')?></strong></h3>
                        </td>

                        <td>
                            <h4>Total de Contas Vendidas</h4>
                            <h3><strong><?php echo $contas_vendedor['0']['contas_vendidas']+$francisContas ?></strong></h3>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <small>Vendido em Junho</small>
            <h2 class="no-margins">
                <?php echo "R$", number_format($contas_vendedor['0']['total_vendido'],2, ',' , '.')?>
            </h2>
            <div id="sparkline1"></div>
        </div>


    </div>
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox">
                    <div class="ibox-content">
                        <h2>Clientes</h2>
                        <div class="input-group">
                        </div>
                        <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted"><?php echo $contas_vendedor['0']['contas_vendidas']," Contas Vendidas" ?></span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Clientes</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                    <?php foreach ($vendedor as $dados):?>
                                                    <tr>
                                                        <td class="client-avatar"><img alt="image" src="img/francis-nova.png"> </td>
                                                        <td>
                                                            <a data-toggle="tab" href="#<?php echo $dados['id'] ?>" class="client-link">
                                                                <?php echo $dados['title'] ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <?php echo  $dados['quant_colaboradores'] ," colaboradores" ?> </td>
                                                        <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                                        <td>(11)3509-4451 </td>
                                                        <td class="client-status"><span class="label label-primary"><?php echo "R$", number_format($dados['value'],2, ',' , '.') ?></span></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox ">

                    <div class="ibox-content">
                        <div class="tab-content">

                            <?php foreach ($vendedor as $dados): ?>
                            <div id="<?php echo $dados['id'] ?>" class="tab-pane active">
                                <div class="row m-b-lg">
                                    <div class="col-lg-12 text-center">
                                        <h2>
                                            <?php echo $dados['title']; ?>
                                        </h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                            <?php echo $dados['cenario_lead'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="client-detail">
                                    <div class="full-height-scroll">

                                        <strong>Condições de Fechamento</strong>
                                        <p>
                                            <?php echo $dados['condicao_fechamento'] ?>
                                        </p>
                                        <hr/>
                                        <strong>Resumo do Fechamento</strong>
                                        <p>
                                            <?php echo $dados['resumo_fechamento']?>
                                        </p>
                                        <hr/>
                                        <strong>Informações da Conta</strong>
                                        <div id="vertical-timeline" class="vertical-container dark-timeline">
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-coffee"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>
                                                        <?php echo "SDR:  ",$dados['sdr'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>
                                                        <?php echo "Data do Ganho:  ", $dados['data_ganho'] ?> </p>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-bolt"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>
                                                        <?php echo "Cargo:  s", $dados['cargo'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon navy-bg">
                                                    <i class="fa fa-warning"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>
                                                        <?php echo "Produto: ", $dados['produto'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-coffee"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>
                                                        <?php echo "Ciclo de Venda: ", $dados['ciclo_venda'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php endforeach; ?>
                            <div id="company-1" class="tab-pane">
                                <div class="m-b-lg">
                                    <h2>Ultrices Incorporated</h2>

                                    <p>
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
                                    </p>
                                    <div>
                                        <small>Active project completion with: 72%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 72%;" class="progress-bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="client-detail">
                                    <div class="full-height-scroll">

                                        <strong>Last activity</strong>

                                        <ul class="list-group clear-list">
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> <span class="label label-danger">BLOCKED</span> </span>
                                                Hidden in the middle of text
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pull-right"><span class="label label-primary">NEW</span> </span>
                                                Non-characteristic words etc.
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pull-right">  <span class="label label-warning">WAITING</span> </span>
                                                Bonorum et Malorum
                                            </li>
                                        </ul>
                                        <strong>Notes</strong>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                        </p>
                                        <hr/>
                                        <strong>Timeline activity</strong>
                                        <div id="vertical-timeline" class="vertical-container dark-timeline">
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>Many desktop publishing packages and web page editors now use Lorem.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-bolt"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>There are many variations of passages of Lorem Ipsum available.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon navy-bg">
                                                    <i class="fa fa-warning"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>The generated Lorem Ipsum is therefore.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-coffee"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>Conference on the sales results for the previous year.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>Many desktop publishing packages and web page editors now use Lorem.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>