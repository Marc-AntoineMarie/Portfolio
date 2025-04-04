function toggleCompetence(element) {
    const competenceItem = element.parentElement;
    competenceItem.classList.toggle('active');
    
    // Rotate the chevron icon
    const icon = element.querySelector('.toggle-icon');
    if (competenceItem.classList.contains('active')) {
        icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
    } else {
        icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
    }
}