# Tabela Frutas
| CAMPOS        |     TIPO      |TAMANHO|NOT NULL|AUTO_INCREMENT  | Primary Key 
| ------------- |:-------------:| -----:|--------:|------:        |  -------------:
| Código        | INT           | 10    |SIM      |SIM            |SIM
| Nome          | VARCHAR       | 50    |SIM      |               |NÃO
| Quantidade    | INT           | 10    |NÃO      |               |NÃO
| Preço         | DOUBLE        | 10    |NÃO      |               |NÃO
| id_tipo       | INT           | 10    |NÃO      |               |NÃO
| ID_Qtd         | INT           | 10    | NÃO    |               |NAO


# Tabela Tipo

| CAMPOS       |    TIPO        | TAMANHO  | NOT NULL |    AUTO_INCREMENT    | PRIMARY KEY
| ------------- |:-------------:| -----:|--------:|------:        |  -------------:
| ID            | INT           | 10    | SIM     |      SIM      |   SIM     |    
| Nome          | VARCHAR       | 50    |NAO      |NÃO            | NÃO        |


# Tabela Quantidade
| CAMPOS        |     TIPO      |TAMANHO|NOT NULL|AUTO_INCREMENT  | Primary Key 
| ------------- |:-------------:| -----:|--------:|--------------:|  -------------:
| ID            | INT           | 10    | SIM     | SIM           | SIM         |
|UnidadeMedida  | VARCHAR       | 50    | NÃO     | NÃO|          | Não         |
| qtd           | INT           | 10    | SIM     | NÃO           | SIM
