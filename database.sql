CREATE TABLE categories (
    id INTEGER PRIMARY KEY.
    name VARCHAR(255) NOT NULL
);

CREATE TABLE product(
    id INTEGER PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO categories (id, name) VALUES
(1, "Fruit"),
(2, "Bakery"),
(3, "Dry Foofs"),
(4, "Vegetables");

INSERT INTO products(id, name, category_id) VALUES
(1, "Apple"),
(2, "Banana"),
(3, "Orange"),
(4, "Kiwi"),
(5, "Cherry"),
(6, "Stwarberry"),
(7, "Bread"),
(8, "Carrot"),
(9, "Brockoli");
