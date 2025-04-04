from flask import Flask, request, render_template_string

app = Flask(__name__)

PARTY_ITEMS = [
    "Cake", "Balloons", "Music System", "Lights", "Catering Service",
    "DJ", "Photo Booth", "Tables", "Chairs", "Drinks",
    "Party Hats", "Streamers", "Invitation Cards", "Party Games", "Cleaning Service"
]

ITEM_VALUES = {
    0: 20, 1: 21, 2: 10, 3: 5, 4: 8,
    5: 3, 6: 15, 7: 7, 8: 12, 9: 6,
    10: 9, 11: 18, 12: 4, 13: 2, 14: 11
}

@app.route('/', methods=['GET'])
def party_planner():
    indices = request.args.get('items', '')
    selected_indices = [int(i) for i in indices.split(',') if i.isdigit() and int(i) in ITEM_VALUES]
    selected_items = [PARTY_ITEMS[i] for i in selected_indices]
    
    if not selected_indices:
        return "<h2>Please select valid party items.</h2>"
    
    base_code = ITEM_VALUES[selected_indices[0]]
    for i in selected_indices[1:]:
        base_code &= ITEM_VALUES[i]
    
    adjusted_code = base_code
    message = ""
    
    if base_code == 0:
        adjusted_code += 5
        message = "Epic Party Incoming!"
    elif base_code > 5:
        adjusted_code -= 2
        message = "Let's keep it classy!"
    else:
        message = "Chill vibes only!"
    
    html_template = """
    <h2>Selected Items: {{ selected_items }}</h2>
    <p>Base Party Code: {{ base_code }}</p>
    <p>Adjusted Party Code: {{ adjusted_code }}</p>
    <h3>Message: {{ message }}</h3>
    """
    
    return render_template_string(html_template, selected_items=selected_items, base_code=base_code, adjusted_code=adjusted_code, message=message)

if __name__ == '__main__':
    app.run(debug=True)
