<h2 align=center>Laporan</h2>
    <h3>Transaksi</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>USER</th><th>MEMBER</th>
                <th>TANGGAL</th><th>BATAS WAKTU</th><th>TANGGAL BAYAR</th><th>JENIS PAKET</th><th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../conn.php";
            $qry_transaksi = mysqli_query($conn, "SELECT transaksi.*,member.nama as nama_member, user.nama as nama_user, paket.jenis from transaksi INNER JOIN user on user.id_user=transaksi.id_user INNER JOIN member on member.id_member = transaksi.id_member INNER JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi INNER JOIN paket ON paket.id_paket = detail_transaksi.id_paket ORDER BY transaksi.id_transaksi ASC");
                $no=0;
                while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                    $no++;
                    ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_transaksi['nama_user']?></td>
                    <td><?=$data_transaksi['nama_member']?></td>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                    <td><?=$data_transaksi['jenis']?></td>
                    <td><?=$data_transaksi['status']?></td>

                </tr>
                <?php
            }
            ?>
        </tbody>
        </table>

        <h3>Member</h3>
        <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA</th><th>ALAMAT</th>
                <th>JENIS KELAMIN</th><th>TELPON</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../conn.php";
            $qry_member=mysqli_query($conn,"select * from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_member['nama']?></td>
                    <td><?=$data_member['alamat']?></td>
                    <td><?=$data_member['jenis_kelamin']?></td>
                    <td><?=$data_member['tlp']?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        </table>

        <h3>Outlet</h3>
        <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA CABANG</th><th>ALAMAT</th>
                <th>TELP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../conn.php";
            $qry_outlett=mysqli_query($conn,"select * from outlet");
            $no=0;
            while($data_outlett=mysqli_fetch_array($qry_outlett)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_outlett['nama_outlet']?></td>
                    <td><?=$data_outlett['alamat']?></td>
                    <td><?=$data_outlett['telp']?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        </table>

        <h3>Paket</h3>
        <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA PAKET</th><th>HARGA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../conn.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_paket['jenis']?></td>
                    <td><?=$data_paket['harga']?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>