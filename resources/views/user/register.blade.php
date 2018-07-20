<!DOCTYPE>
<html lang="en">
    <head>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="{{asset('user/css/default.css')}}"/>
    </head>
    <body>
        <form action="{{route('storeRegister')}}" class="register" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h1>Registration Form</h1>

            <fieldset class="row1">
                <legend>DATA TIM
                </legend>
                <p>
                  <label> Username:</label>
                  <input type="text" name="username" maxlength="50" required/>
                </p>
                <p>
                    <label>Password :
                    </label>
                    <input type="password" name="password" maxlength="20" required/>

                </p>
                <p>
                  *username dan password digunakan untuk login ke halaman online test

                </p>
                <p>
                  <label> Nama Tim :
                  </label>
                  <input type="text" name="nama_team" maxlength="50" required/>
                </p>
                <p>
                  <label> Nama Sekolah :
                  </label>
                  <input type="text" name="nama_sekolah" maxlength="50" required/>
                </p>
                <p>
                  <label> Alamat Sekolah :
                  </label>
                  <input type="text" name="alamat_sekolah" maxlength="200" required/>
                </p>
                <p>
                  <label> E-mail Sekolah :
                  </label>
                  <input type="email" name="email_sekolah" maxlength="50" required/>
                </p>
                <p>
                  <label> No. Telpon Sekolah
                  </label>
                  <input type="number" name="telepon_sekolah" maxlength="12" required/>
                </p>
                <p>
                    <label>Regional :
                    </label>
                    <select name="regional">
                        <option>Pilih Regional </option>
                        <option value="1">I    </option>
                        <option value="2">II   </option>
                        <option value="3">III  </option>
                        <option value="4">IV   </option>
                        <option value="5">V    </option>
                        <option value="6">VI   </option>
                        <option value="7">VII  </option>
                        <option value="8">VIII </option>
                    </select>
                </p>

                <p>
                  *)Regional diiisi sesuai keterangan berikut : <br>
                  Regional I    : Bogor <br>
                  Regional II   : DKI Jakarta dan Banten <br>
                  Regional III  : Jawa Barat selain Bogor <br>
                  Regional IV   : Lampung, Sumatera Selatan, 
                                  Bengkulu, dan Bangka Belitung <br>
                  Regional V    : Nangroe Aceh Darussalam, Sumatera Utara,
                                  Sumatera Barat, Riau, dan Kepulauan Riau <br>
                  Regional VI   : Jawa Tengah dan DI Yogyakarta <br>
                  Regional VII  : Jawa Timur, Bali, NTB, NTT <br>
                  Regional VIII : Kalimantan Barat, Kalimantan Tengah, Kalimantan Selatan,
                                  Kalimantan Timur, Kalimantan Utara, Sulawesi Barat, Sulawesi Tengah,
                                  Sulawesi Selatan, Sulawesi Tenggara, Gorontalo, Maluku, Madura, Papua
                                  dan Papua Barat <br>
                </p>
            </fieldset>

            <legend>DATA INDIVIDU</legend>
            <fieldset class="row2">

                <legend>Data Pembimbing
                </legend>
                <p>
                    <label>Nama Pembimbing :
                    </label>
                    <input type="text" class="long" name="nama_pembimbing" maxlength="50" required/>
                </p>
                <p>
                    <label>NIP :
                    </label>
                    <input type="number" pattern="\(\d\d\d\d\)-\d\d\d\d\d\d\d\d" name="nip" maxlength="20" required />
                </p>
                <p>
                    <label>No. HP :
                    </label>
                    <input type="number" class="long" name="nomor_hp" maxlength="13" required/>
                </p>
                <p>
                    <label>Email :
                    </label>
                    <input type="email" class="long" name="email_pembimbing" maxlength="50" required/>
                </p>
                <p>
                    <label>Foto Formal :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_formal" required/>
                
                <p>
                    <label>Foto / Scan KTP :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_ktp" required/>
                </p>
            </fieldset>
            <fieldset class="row3 jarak">
                <legend >Data Ketua Tim
                </legend>
                <p>
                    <label>Nama Ketua Tim :
                    </label>
                    <input type="text" class="long" name="nama_lengkap0" maxlength="50" required/>
                </p>
                <p>
                    <label>No. HP :
                    </label>
                    <input type="number" class="long" name="nomor_hp0" maxlength="13" required/>
                </p>
                <p>
                    <label>Email :
                    </label>
                    <input type="email" class="long" name="email0" maxlength="50" required/>
                </p>
                <p>
                    <label>Foto Formal :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_formal0" required/>
                </p>
                <p>
                    <label>Foto / Scan Kartu Pelajar :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_kartupelajar0" required/>
                </p>
                <input type="hidden" name="role0" value="Ketua">
            </fieldset>
            <fieldset class="row2 satu">
                <legend>Data Anggota 1
                </legend>
                <p>
                    <label>Nama Anggota 1 :
                    </label>
                    <input type="text" class="long" name="nama_lengkap1" maxlength="50" required/>
                </p>
                <p>
                    <label>No. HP :
                    </label>
                    <input type="number" class="long" name="nomor_hp1" maxlength="13" required/>
                </p>
                <p>
                    <label>Email :
                    </label>
                    <input type="email" class="long" name="email1" maxlength="50" required/>
                </p>
                <p>
                    <label>Foto Formal :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_formal1" required/>
                </p>
                <p>
                    <label>Foto / Scan Kartu Pelajar :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_kartupelajar1" required/>
                </p>
                <input type="hidden" name="role1" value="Anggota 1">
            </fieldset>
            <fieldset class="row3">
                <legend>Data Anggota 2
                </legend>
                <p>
                    <label>Nama Anggota 2 :
                    </label>
                    <input type="text" class="long" name="nama_lengkap2" maxlength="50" required/>
                </p>
                <p>
                    <label>No. HP :
                    </label>
                    <input type="number" class="long" name="nomor_hp2" maxlength="13" required/>
                </p>
                <p>
                    <label>Email :
                    </label>
                    <input type="email" class="long" name="email2" maxlength="50" required/>
                </p>
                <p>
                    <label>Foto Formal :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_formal2" required/>
                </p>
                <p>
                    <label>Foto / Scan Kartu Pelajar :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_kartupelajar2" required/>
                </p>
                <input type="hidden" name="role2" value="Anggota 2">
            </fieldset>

            <fieldset class="row3">
                <legend>DATA LAIN
                </legend>
                <p>
                    <label>Bukti Pembayaran :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_bukti" required/>
                </p>
                <p>
                    <label>Surat Utusan Sekolah :
                    </label>
                    <input type="file" accept="image/jpeg,image/png" class="long" name="foto_utusan" required/>
                </p>
            </fieldset>
            <div>
              <p> Dengan menekan tombol register, anda telah setuju untuk mendaftarkan diri sebagai peserta LCTIP XXVI, dan akan mematuhi segala regulasi yang telah tertulis dengan guidlebook LCTIP XXVI.
              </p>
            </div>

            <fieldset class="row4">
                <button type="reset" value="Reset" class="reset">Reset</button>
                <button type="submit" value="submit" class="button">Register</button>
            </fieldset>
        </form>
    </body>
</html>
