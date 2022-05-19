const productPhoto = document.querySelectorAll('.product-photo');
productPhoto.forEach(element => {
    element.addEventListener('click', (e) => {
        console.log(e.target.dataset.productId);
        getProductDetail(e.target.dataset.productId)
    })
});


async function getProductDetail(productId) {
    //Bước 1: chuẩn bị url, data, gọi fetch gủi yêu cầu 
    const token = document.querySelector('meta[name=csrf-token]').getAttribute('content');
    const url = "./api/product";
    const data = { productId: productId };
    const response = await fetch(url, {
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': token, // da gui token di | sau rout api
        },
        method: 'POST',
        body: JSON.stringify(data)
    });
    //B2: Đọc kq
    const result = await response.json();


}