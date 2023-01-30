document.getElementById('filter_company_id').addEventListener('change', function() {
    let companyId = this.value || this.options[this.selectedIndex].value
    // let companyId = this.value
    // let companyId = "111";
    // alert(companyId);

    window.location.href = window.location.href.split('?')[0] + '?company_id=' + companyId
})