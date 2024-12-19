-- Suppression des tables existantes si elles existent
DROP TABLE IF EXISTS Purchase CASCADE;
DROP TABLE IF EXISTS Extra CASCADE;
DROP TABLE IF EXISTS Article CASCADE;
DROP TABLE IF EXISTS Category CASCADE;
DROP TABLE IF EXISTS "User" CASCADE;

-- Création de la table 'Category'
CREATE TABLE Category (
                          id SERIAL PRIMARY KEY,
                          name VARCHAR(255) NOT NULL
);

-- Création de la table 'Article'
CREATE TABLE Article (
                         id SERIAL PRIMARY KEY,
                         name VARCHAR(255) NOT NULL,
                         price DECIMAL(10, 2) NOT NULL,
                         description TEXT,
                         stock INT NOT NULL,
                         category_id INT,
                         FOREIGN KEY (category_id) REFERENCES Category(id) ON DELETE SET NULL
);


-- Création de la table 'Extra'
CREATE TABLE Extra (
                       id SERIAL PRIMARY KEY,
                       name VARCHAR(255) NOT NULL,
                       article_id INT NOT NULL,
                       FOREIGN KEY (article_id) REFERENCES Article(id) ON DELETE CASCADE
);

-- Création de la table 'User'
CREATE TABLE "User" (
                        id SERIAL PRIMARY KEY,
                        firstname VARCHAR(255) NOT NULL,
                        lastname VARCHAR(255) NOT NULL,
                        email VARCHAR(255) UNIQUE NOT NULL,
                        password VARCHAR(255) NOT NULL
);

-- Création de la table 'Purchase'
CREATE TABLE Purchase (
                          id SERIAL PRIMARY KEY,
                          article_id INT NOT NULL,
                          user_id INT NOT NULL,
                          quantity INT NOT NULL,
                          date TIMESTAMP NOT NULL,
                          FOREIGN KEY (article_id) REFERENCES Article(id) ON DELETE CASCADE,
                          FOREIGN KEY (user_id) REFERENCES "User"(id) ON DELETE CASCADE
);


-- Insertion d'un utilisateur standard
INSERT INTO "User" (firstname, lastname, email, password) VALUES
    ('John', 'Doe', 'john.doe@example.com', 'securePassword123');

-- Insertion d'un administrateur
INSERT INTO "User" (firstname, lastname, email, password) VALUES
    ('root', 'toor', 'ro@ot.fr', 'adminPassword456');

-- Insertion d'une catégorie

INSERT INTO Category (name) VALUES
    ('Boissons');

-- Insertion d'articles

INSERT INTO Article (name, price, description, stock, category_id) VALUES
    ('Coca-Cola', 2.50, 'Boisson gazeuse', 100, 1),
    ('Heineken', 3.50, 'Bière blonde', 50, 1),
    ('Lipton Ice Tea', 2.00, 'Boisson glacée', 75, 1),
    ('Orangina', 2.50, 'Boisson gazeuse', 100, 1),
    ('Perrier', 2.00, 'Eau gazeuse', 100, 1),
    ('Red Bull', 3.00, 'Boisson énergisante', 50, 1),
    ('Sprite', 2.50, 'Boisson gazeuse', 100, 1),
    ('Tropicana', 2.50, 'Jus de fruit', 100, 1),
    ('Vittel', 1.50, 'Eau plate', 100, 1);