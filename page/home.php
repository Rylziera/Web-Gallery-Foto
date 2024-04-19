<div class="container my-4 p-5 bg-hero rounded">
    <div class="py-5 text-white">
        <p class="display-5 mb-10 fw-bold">Galeri Foto</p>
        <p class="fs-10 col-md-8">
        <br>
             Rayya Alziera
             <br>
             XII RPL / 19  
        </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php 
        $tampil=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID");
        foreach($tampil as $tampils):
        ?>
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="uploads/<?= $tampils['LokasiFile'] ?>" class="object-fit-cover" style="aspect-ratio: 1/1;">
                <div class="card-body">
                    <h5 class="card-title"><?= $tampils['JudulFoto'] ?></h5>
                    <p class="card-text text-muted">Diunggah Oleh : <?= $tampils ['Username'] ?></p>
                    <a href="?url=detail&&id=<?= $tampils['FotoID'] ?>" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>