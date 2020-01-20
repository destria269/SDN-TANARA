<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    Tahun Ajaran
                </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="id_thnajar">
                            <option value="">--- Pilih Tahun Ajaran --</option>
                            <?php
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM thnajar");
                            while($d = mysqli_fetch_array($data)) {
                                    echo '<option value="'.$d['id_thnajar'].'">'.$d['tahun_ajar'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    Semester
                </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="id_thnajar">
                            <option value="">--- Pilih Semester --</option>
                            <?php
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM thnajar");
                            while($d = mysqli_fetch_array($data)) {
                                    echo '<option value="'.$d['id_thnajar'].'">'.$d['smt_aktif'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
            </div>