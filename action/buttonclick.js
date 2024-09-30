function buyNow(name, price) {
    const url = `purchase.html?item=${encodeURIComponent(name)}&price=${price}`;
    window.open(url, '_blank');
}
