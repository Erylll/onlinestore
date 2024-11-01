document.getElementById('apply-filters').addEventListener('click', function() {
    const selectedBrands = Array.from(document.querySelectorAll('.brand-filter:checked')).map(cb => cb.value);
    const minPrice = parseInt(document.getElementById('min-price').value) || 0;
    const maxPrice = parseInt(document.getElementById('max-price').value) || Infinity;

    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        const brand = card.getAttribute('data-brand');
        const price = parseInt(card.getAttribute('data-price'));

        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(brand);
        const priceMatch = price >= minPrice && price <= maxPrice;

        if (brandMatch && priceMatch) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});
