<!--modal berkas-->
<div class="modal fade" id="modalberkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body position-relative">
        <form>
          <div id="modal-loader" class="position-absolute w-100 h-100 bg-light d-flex justify-content-center align-items-center">
            <span class="spinner-border text-success" role="status"></span>
          </div>
          <h3 class="modal-title" id="exampleModalLabel">Berkas</h3>
          <hr class="mt-2 mb-3">
          <div class="form-group my-2">
            <label>Foto KTP Suami</label>
            <div id="fotoktp-suami" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Foto KTP Istri</label>
            <div id="fotoktp-istri" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Foto Kartu Keluarga</label>
            <div id="fotokk" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Foto Surat Nikah / Akte Cerai</label>
            <div id="berkas-statusnikah" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Surat Keterangan belum memiliki rumah</label>
            <div id="surat-ket-rumah" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Surat Keterangan memiliki penghasilan tetap</label>
            <div id="surat-ket-pendapatan" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Surat Keterangan Catatan Kepolisian (SKCK)</label>
            <div id="surat-ket-kepolisian" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Pas Foto Suami</label>
            <div id="pasfoto-suami" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Pas Foto Istri</label>
            <div id="pasfoto-istri" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>PDF Surat Permohonan</label>
            <div id="surat-permohonan" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>PDF Surat Kesanggupan</label>
            <div id="surat-kesanggupan" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>PDF Surat Pernyataan Bermaterai</label>
            <div id="surat-pernyataan" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
          <div class="form-group my-2">
            <label>Surat Rekomendasi hunian diffable</label>
            <div id="surat-rekomendasi" class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Data Kosong">
              <span class="input-group-append">
                <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
              </span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {

    var fields = [
      'fotoktp_suami',
      'fotoktp_istri',
      'fotokk',
      'berkas_statusnikah',
      'surat_ket_rumah',
      'surat_ket_pendapatan',
      'surat_ket_kepolisian',
      'pasfoto_suami',
      'pasfoto_istri',
      'surat_permohonan',
      'surat_kesanggupan',
      'surat_pernyataan',
      'surat_rekomendasi'
    ];

    var id = [
      'fotoktp-suami',
      'fotoktp-istri',
      'fotokk',
      'berkas-statusnikah',
      'surat-ket-rumah',
      'surat-ket-pendapatan',
      'surat-ket-kepolisian',
      'pasfoto-suami',
      'pasfoto-istri',
      'surat-permohonan',
      'surat-kesanggupan',
      'surat-pernyataan',
      'surat-rekomendasi'
    ];

    function updateModalBerkas(notEmpty, data) {

        if (!notEmpty) {
          data = {};
          fields.forEach(i => {data[i] = ''});
        }
        // console.table(data);

        for (let i in fields) {
          document.querySelector(`#${id[i]} input`).value = data[fields[i]];
          document.querySelector(`#${id[i]} button`).setAttribute('onclick', 
            (data[fields[i]] !== '' ? `window.open('/storage/${data[fields[i]]}', '_blank')` : '')
          );
          document.querySelector(`#${id[i]} button`).disabled = !notEmpty;
        }
    }

    document.querySelectorAll('.btn-modal-berkas').forEach((element) => {
      element.addEventListener('click', (e) => {

        document.getElementById('modal-loader').classList.remove('hide');
        document.querySelector('#modalberkas .modal-body').classList.add('overflow-hidden');

        let id = e.target.dataset.id;

        // console.log(`/api/pengajuan/berkas?id=${id}`)

        fetch(`/api/pengajuan/berkas?id=${id}`)
        .then((response) => {
        if (!response.ok) throw Error(response.statusText); 
            return response.json();
        })
        .then((data) => {
          updateModalBerkas((Object.keys(data).length !== 0), data);  
        })
        .catch((error) => {console.log(error)})
        .finally(() => {
          document.getElementById('modal-loader').classList.add('hide');
          document.querySelector('#modalberkas .modal-body').classList.remove('overflow-hidden');
        });
      });
    });

  });
</script>