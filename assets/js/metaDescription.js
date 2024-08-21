const pageData = {
    'soins-du-visage': {
        title: 'Soins du visage',
        description: 'Soins du visage.'
    },
    '/page2': {
        title: 'Page 2',
        description: 'Ceci est la description de la page 2.'
    }
};

  // Identifier la page actuelle en fonction de l'URL
const currentPage = window.location.pathname.split('/').pop();
console.log('currentPage:', currentPage);

  // Vérifier si les données existent pour la page actuelle
if (pageData[currentPage]) {
    const { title, description } = pageData[currentPage];
    
    // Mettre à jour la méta-description dans le HTML
    const metaDescriptionTag = document.querySelector('meta[name="description"]');
    if (metaDescriptionTag) {
        metaDescriptionTag.setAttribute('content', description);
    }
}
