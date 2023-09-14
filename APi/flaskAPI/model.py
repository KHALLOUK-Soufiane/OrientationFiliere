# -*- coding: utf-8 -*-
"""Untitled4.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1I3QrE9UBnJdROs0NuexUbvhv-KBZP4E5
"""

# import joblib
# import pandas as pd


# # Load the saved model from file
# # model = joblib.load('random_forest_model.pkl')

# # new_data = pd.read_csv('New_data.csv')

# # Remove the "Nom" and "id" columns
# new_data = new_data.drop(['Nom', 'id','filiere'], axis=1)

# # Make predictions using the loaded model
# predictions = model.predict(new_data)

# # Print the predictions
# for prediction in predictions:
#     predicted_filiere = label_encoder.inverse_transform(prediction)
#     print("Predicted Filiere:", predicted_filiere[0])
#     print(prediction)

import pandas as pd
import joblib

# Load the saved model and label encoder
def predict(json):
    model = joblib.load('model.pkl')
    label_encoder = joblib.load('label_encoder.pkl')

    # Prepare new student data
    new_data = pd.DataFrame(json)

    # Make predictions using the loaded model
    predictions = model.predict(new_data)

    # Decode the predicted labels
    predicted_filiere = label_encoder.inverse_transform(predictions)

    # Print the predicted "filiere" for the new student
    return predicted_filiere[0]