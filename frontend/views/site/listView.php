  
<div class="card shadow mb-3">
    <div class="card-body">
        <h4 class="mb-3"> patient reports </h4>
        <p class="normal-text"><b> title: </b> <br> <?= $model->recordId?></p>
        <p class="normal-text"><b> patient </b> <br> <?= $model->patientId ?></p>
        <p class="normal-text"><b> Description: </b> <br> <?= $model->diagnosis ?></p>
        <!-- <p class="normal-text"><b> Description: </b> <br> ?= $model->joinWith->getReport->reportId ?></p> -->
        <p class="normal-text"><b> Date: </b> <br> <?= $model->date ?></p>
    </div>
</div>