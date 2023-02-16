document.getElementById('filter_company_id').addEventListener('change', function() {
    let companyId = this.value || this.options[this.selectedIndex].value
    // let companyId = this.value
    // let companyId = "111";
    // alert(companyId);

    window.location.href = window.location.href.split('?')[0] + '?company_id=' + companyId
})



document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault()
        if(confirm("Are You Sure?")) {
            let action = this.getAttribute('href')
            let form = document.getElementById('form-delete')
            form.setAttribute('action', action)
            form.submit()
        }
    })
})