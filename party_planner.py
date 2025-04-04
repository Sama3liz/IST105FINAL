from flask import Flask, request, jsonify

app = Flask(__name__)

# Define the values for each party item
party_items = {
    0: 20, 1: 21, 2: 10, 3: 5, 4: 8, 5: 3, 6: 15,
    7: 7, 8: 12, 9: 6, 10: 9, 11: 18, 12: 4, 13: 2, 14: 11
}

@app.route('/')
def party_planner():
    # Get the selected items from the query parameters
    items = request.args.get('items')
    
    if not items:
        return "No items selected", 400
    
    # Convert the comma-separated list of indices to a list of integers
    selected_indices = list(map(int, items.split(',')))
    
    # Calculate the base party code using bitwise AND operation
    base_code = party_items[selected_indices[0]]
    for index in selected_indices[1:]:
        base_code &= party_items[index]
    
    # Apply conditions to modify the base party code
    if base_code == 0:
        base_code += 5
        message = "Epic Party Incoming!"
    elif base_code > 5:
        base_code -= 2
        message = "Let's keep it classy!"
    else:
        message = "Chill vibes only!"
    
    # Prepare the response in HTML format
    selected_items = ', '.join([str(i) for i in selected_indices])
    result = f"""
    <html>
    <body>
        <h3>Selected Items: {selected_items}</h3>
        <p>Base Party Code: {base_code}</p>
        <p>Message: {message}</p>
    </body>
    </html>
    """
    
    return result

if __name__ == "__main__":
    app.run(debug=True)
