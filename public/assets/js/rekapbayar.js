function toggleDisplay() {
  document.getElementById('selection-show').classList.toggle('active');
  document.getElementById('selection-submit').classList.toggle('d-none');
  document.getElementById('selection-tutor').classList.toggle('d-none');
  document.querySelectorAll('.selection').forEach(e => {
    e.classList.toggle('d-none');
  });

  switch (document.getElementById('selection-show').classList.contains('active')) {
    case true:
      document.getElementById('selection-show').innerText = "Batalkan Pilihan";
      document.getElementById('selection-submit').disabled = true;
      break;
    case false:
      document.getElementById('selection-show').innerText = "Kirim Notifikasi";
      document.getElementById('selection-submit').innerHTML = 'Submit';
  }
}

function clearSelection() {
  document.querySelectorAll('.selection input[type=checkbox]').forEach(e => {
    e.checked = false;
  });

  return [];
}

document.addEventListener('DOMContentLoaded', () => {
  let selected_id = [];

  document.getElementById('selection-show').addEventListener('click', (e) => {
    if (e.target.classList.contains('active') && selected_id.length) {
      if (confirm("Anda yakin ingin menghapus semua seleksi?")) {
        selected_id = clearSelection();
        toggleDisplay();
      }
    } else {
      toggleDisplay();
    }
  });

  document.getElementById('selection-submit').addEventListener('click', () => {
    if (confirm('Apakah anda yakin ingin mengirim notifikasi?')) {
      document.getElementById('selection-submit').innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`;
      document.getElementById('selection-submit').disabled = true;

      // console.log(`/api/rekapbayar/send-notif?target=${JSON.stringify(selected_id)}`);

      fetch(`/api/rekapbayar/send-notif?target=${JSON.stringify(selected_id)}`)
      .then((response) => {
        if (!response.ok) throw Error(response.statusText); 
        return response.json();
      })
      .then((data) => {
        console.log(data);
      })
      .catch((error) => {console.log(error)})
      .finally(() => {
        selected_id = clearSelection();
        toggleDisplay();
      });

    }
  });

  document.querySelectorAll('.selection input[type=checkbox]').forEach(e => {
    e.addEventListener('change', () => {
      selected_id = [];
      document.querySelectorAll('.selection input[type=checkbox]:checked').forEach(e => {
        selected_id.push(parseInt(e.dataset.id));
      });

      // console.log(selected_id);
      document.getElementById('selection-submit').disabled = !selected_id.length;
    });
  });

});