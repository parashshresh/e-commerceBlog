import React from 'react';

export default function Home() {
  // You can fetch products from API later, for now mock example:
  const products = [
    { id: 1, name: "MacBook Air", price: 50000, image_url: "https://via.placeholder.com/300x200" },
    { id: 2, name: "iPhone 11", price: 35000, image_url: "https://via.placeholder.com/300x200" },
  ];
 
  return (
    <>
      {/* Hero Section */}
      <section
        className="hero bg-primary text-white py-5 mb-5"
        style={{
          background: "url('https://pd.w.org/2025/05/3606836bf27ab0023.41048351-2048x1536.jpg') center/cover no-repeat"
        }}
      >
        <div className="container text-center">
          <h1 className="display-4 fw-bold">Welcome to My WooShop</h1>
          <p className="lead mb-4">Discover amazing products, great deals, and fast shipping.</p>
          <a href="#" className="btn btn-light btn-lg">Shop Now</a>
        </div>
      </section>

      {/* Featured Products */}
      <section className="container mb-5">
        <h2 className="mb-5 text-center">Featured Products</h2>
        <div className="row g-4">
          {products.map(product => (
            <div key={product.id} className="col-6 col-md-4 col-lg-3">
              <div className="card shadow-sm h-100">
                <a href={`/products/${product.id}`}>
                  <img src={product.image_url} className="card-img-top" alt={product.name} />
                </a>
                <div className="card-body d-flex flex-column">
                  <h5 className="card-title">{product.name}</h5>
                  <p className="price text-primary fw-bold mb-3">${product.price.toFixed(2)}</p>
                  <a href="#" className="btn btn-outline-primary mt-auto">Add to Cart</a>
                </div>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Call to Action */}
      <section className="bg-primary text-white py-5">
        <div className="container">
          <div className="row justify-content-center text-center">
            <div className="col-md-8 col-lg-6">
              <h3>Sign up for exclusive deals and offers</h3>
              <form className="row g-3 mt-3" style={{ maxWidth: '600px', margin: 'auto' }}>
                <div className="col-9">
                  <input type="email" className="form-control form-control-lg" placeholder="Enter your email" required />
                </div>
                <div className="col-3">
                  <button type="submit" className="btn btn-light btn-lg w-100">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}