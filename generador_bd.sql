-- Generado por Oracle SQL Developer Data Modeler 21.2.0.183.1957
--   en:        2021-11-13 18:49:20 CET
--   sitio:      Oracle Database 11g
--   tipo:      Oracle Database 11g

-- predefined type, no DDL - MDSYS.SDO_GEOMETRY

-- predefined type, no DDL - XMLTYPE

CREATE TABLE categoria (
    nom          VARCHAR(30),
    categoria_id INTEGER AUTO_INCREMENT,
    PRIMARY KEY (categoria_id)
);

CREATE TABLE comanda (
    preu       FLOAT,
    comanda_id INTEGER AUTO_INCREMENT,
    usuari_comanda_id INTEGER NOT NULL,
    PRIMARY KEY (comanda_id)
);

CREATE TABLE producte (
    nom                    VARCHAR(50),
    descripcio             VARCHAR(250),
    price                  FLOAT,
    fecha                  DATETIME,
    producte_id            INTEGER AUTO_INCREMENT,
    PRIMARY KEY (producte_id)
);

CREATE TABLE producte_comanda (
    comanda_comanda_id   INTEGER NOT NULL,
    producte_producte_id INTEGER NOT NULL,
    quantitat            INTEGER NOT NULL
);

ALTER TABLE producte_comanda ADD CONSTRAINT producte_comanda_pk PRIMARY KEY ( comanda_comanda_id,
                                                                  producte_producte_id );

CREATE TABLE producte_categoria (
    categoria_categoria_id     INTEGER NOT NULL,
    producte_producte_id INTEGER NOT NULL
);

ALTER TABLE producte_categoria ADD CONSTRAINT producte_categoria_pk PRIMARY KEY ( categoria_categoria_id,
                                                                  producte_producte_id );

CREATE TABLE usuari (
    nom       VARCHAR(20),
    cognoms   VARCHAR(50),
    password  VARCHAR(255),
    email     VARCHAR(50),
    cp        VARCHAR(10),
    carrer    VARCHAR(50),
    usuari_id INTEGER AUTO_INCREMENT,
    PRIMARY KEY (usuari_id)
);

ALTER TABLE comanda
    ADD CONSTRAINT usuari_comanda_usuari_fk FOREIGN KEY ( usuari_comanda_id )
        REFERENCES usuari ( usuari_id );

ALTER TABLE producte_comanda
    ADD CONSTRAINT producte_comanda_comanda_fk FOREIGN KEY ( comanda_comanda_id )
        REFERENCES comanda ( comanda_id );

ALTER TABLE producte_comanda
    ADD CONSTRAINT producte_comanda_producte_fk FOREIGN KEY ( producte_producte_id )
        REFERENCES producte ( producte_id );

ALTER TABLE producte_categoria
    ADD CONSTRAINT producte_categoria_producte_fk FOREIGN KEY ( producte_producte_id )
        REFERENCES producte ( producte_id );

ALTER TABLE producte_categoria
    ADD CONSTRAINT producte_categoria_categoria_fk FOREIGN KEY ( categoria_categoria_id )
        REFERENCES categoria ( categoria_id );
