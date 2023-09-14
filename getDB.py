import mysql.connector
import pandas as pd

# Connect to the database
cnx = mysql.connector.connect(
    host='127.0.0.1',
    port=8889,
    user='root',
    password='root',
    database='orientationfiliereargon'
)

# Create a cursor to execute queries
cursor = cnx.cursor()

# Execute a select query
query = "SELECT * FROM api1"
cursor.execute(query)

# Fetch all the rows
rows = cursor.fetchall()

# Convert the rows to a Pandas DataFrame
df = pd.DataFrame(rows, columns=cursor.column_names)

# Print the DataFrame
print(df)
df.to_csv('data.csv', index=False)
# Close the cursor and connection
cursor.close()
cnx.close()
# Prétraitement des données
X = data.iloc[:, :-1]  # Toutes les colonnes sauf la dernière
y = data.iloc[:, -1]  # Dernière colonne

# Encodage de la variable catégorielle (filière)
label_encoder = LabelEncoder()
y_encoded = label_encoder.fit_transform(y)

# Division des données en ensembles d'entraînement et de test
X_train, X_test, y_train, y_test = train_test_split(X, y_encoded, test_size=0.2, random_state=42)

# Entraînement du modèle de forêt aléatoire
model = RandomForestClassifier()
model.fit(X_train, y_train)

# Prédiction sur l'ensemble de test
y_pred = model.predict(X_test)

# Évaluation des performances
accuracy = accuracy_score(y_test, y_pred)
print("Précision du modèle :", accuracy)