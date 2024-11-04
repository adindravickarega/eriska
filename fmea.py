from flask import Flask, render_template, request
import numpy as np
import skfuzzy as fuzz
from skfuzzy import control as ctrl

app = Flask(__name__)

# Paste your code here (excluding the import statements)
# Read SOD Priorities
#priority_input = input('Enter the SOD Priority separated by spaces: ')
#priority = list(map(int, priority_input.split()))

# Check if exactly three values were entered
#if len(priority) == 3:
#    print(f'Severity is Priority #{priority[0]}, Occurrence is Priority #{priority[1]}, Detection is Priority #{priority[2]}')
#else:
#    print('Please enter exactly three data values separated by spaces.')

# Input the number of data
#m = int(input('Enter number of Data: '))

'''catatan
a=(m,n) => m = jumlah data, n = S O D
A=(m,N) => N = P1, P2, P3
'''


# Create Antecedent and Consequent objects in skfuzzy
P1 = ctrl.Antecedent(np.arange(1, 11, 1), 'P1')
P2 = ctrl.Antecedent(np.arange(1, 11, 1), 'P2')
P3 = ctrl.Antecedent(np.arange(1, 11, 1), 'P3')
frpn = ctrl.Consequent(np.arange(0, 1001, 1), 'frpn')

# Define fuzzy membership functions
# Priority 1
P1['VL'] = fuzz.trimf(P1.universe, [1, 1, 3])
P1['L'] = fuzz.trimf(P1.universe, [1, 3, 7])
P1['M'] = fuzz.trapmf(P1.universe, [2, 5, 6, 9])
P1['H'] = fuzz.trimf(P1.universe, [4, 8, 10])
P1['VH'] = fuzz.trimf(P1.universe, [8, 10, 10])
# Priority 2
P2['VL'] = fuzz.trimf(P2.universe, [1, 1, 3])
P2['L'] = fuzz.trimf(P2.universe, [1, 3, 6])
P2['M'] = fuzz.trapmf(P2.universe, [3, 5, 6, 8])
P2['H'] = fuzz.trimf(P2.universe, [5, 8, 10])
P2['VH'] = fuzz.trimf(P2.universe, [8, 10, 10])
# Priority 3
P3['VL'] = fuzz.trimf(P3.universe, [1, 1, 3])
P3['L'] = fuzz.trimf(P3.universe, [1, 3, 5])
P3['M'] = fuzz.trapmf(P3.universe, [3, 5, 6, 8])
P3['H'] = fuzz.trimf(P3.universe, [6, 8, 10])
P3['VH'] = fuzz.trimf(P3.universe, [8, 10, 10])

# Define membership functions for output variable
frpn['N'] = fuzz.trimf(frpn.universe, [100, 100, 200])
frpn['VL'] = fuzz.trimf(frpn.universe, [100, 200, 300])
frpn['L'] = fuzz.trimf(frpn.universe, [200, 300, 400])
frpn['HL'] = fuzz.trimf(frpn.universe, [300, 400, 500])
frpn['LM'] = fuzz.trimf(frpn.universe, [400, 500, 600])
frpn['M'] = fuzz.trimf(frpn.universe, [500, 600, 700])
frpn['HM'] = fuzz.trimf(frpn.universe, [600, 700, 800])
frpn['LH'] = fuzz.trimf(frpn.universe, [700, 800, 900])
frpn['H'] = fuzz.trimf(frpn.universe, [800, 900, 1000])
frpn['VH'] = fuzz.trimf(frpn.universe, [900, 1000, 1000])

# Define fuzzy rules
rule1 = ctrl.Rule(P3['VL'] & P1['VL'] & P2['VL'], frpn['N'])
rule2 = ctrl.Rule(P3['VL'] & P1['VL'] & P2['L'], frpn['N'])
rule3 = ctrl.Rule(P3['VL'] & P1['VL'] & P2['M'], frpn['VL'])
rule4 = ctrl.Rule(P3['VL'] & P1['VL'] & P2['H'], frpn['VL'])
rule5 = ctrl.Rule(P3['VL'] & P1['VL'] & P2['VH'], frpn['L'])
rule6=ctrl.Rule(P3['L']&P1['VL']&P2['VL'],frpn['N'])
rule7=ctrl.Rule(P3['L']&P1['VL']&P2['L'],frpn['N'])
rule8=ctrl.Rule(P3['L']&P1['VL']&P2['M'],frpn['VL'])
rule9=ctrl.Rule(P3['L']&P1['VL']&P2['H'],frpn['L'])
rule10=ctrl.Rule(P3['L']&P1['VL']&P2['VH'],frpn['L'])
rule11=ctrl.Rule(P3['M']&P1['VL']&P2['VL'],frpn['VL'])
rule12=ctrl.Rule(P3['M']&P1['VL']&P2['L'],frpn['VL'])
rule13=ctrl.Rule(P3['M']&P1['VL']&P2['M'],frpn['L'])
rule14=ctrl.Rule(P3['M']&P1['VL']&P2['H'],frpn['HL'])
rule15=ctrl.Rule(P3['M']&P1['VL']&P2['VH'],frpn['LM'])
rule16=ctrl.Rule(P3['H']&P1['VL']&P2['VL'],frpn['N'])
rule17=ctrl.Rule(P3['H']&P1['VL']&P2['L'],frpn['VL'])
rule18=ctrl.Rule(P3['H']&P1['VL']&P2['M'],frpn['L'])
rule19=ctrl.Rule(P3['H']&P1['VL']&P2['H'],frpn['L'])
rule20=ctrl.Rule(P3['H']&P1['VL']&P2['VH'],frpn['HL'])
rule21=ctrl.Rule(P3['VH']&P1['VL']&P2['VL'],frpn['VL'])
rule22=ctrl.Rule(P3['VH']&P1['VL']&P2['L'],frpn['VL'])
rule23=ctrl.Rule(P3['VH']&P1['VL']&P2['M'],frpn['L'])
rule24=ctrl.Rule(P3['VH']&P1['VL']&P2['H'],frpn['L'])
rule25=ctrl.Rule(P3['VH']&P1['VL']&P2['VH'],frpn['HL'])
rule26=ctrl.Rule(P3['VL']&P1['L']&P2['VL'],frpn['VL'])
rule27=ctrl.Rule(P3['VL']&P1['L']&P2['L'],frpn['L'])
rule28=ctrl.Rule(P3['VL']&P1['L']&P2['M'],frpn['L'])
rule29=ctrl.Rule(P3['VL']&P1['L']&P2['H'],frpn['HL'])
rule30=ctrl.Rule(P3['VL']&P1['L']&P2['VH'],frpn['LM'])
rule31=ctrl.Rule(P3['L']&P1['L']&P2['VL'],frpn['VL'])
rule32=ctrl.Rule(P3['L']&P1['L']&P2['L'],frpn['L'])
rule33=ctrl.Rule(P3['L']&P1['L']&P2['M'],frpn['HL'])
rule34=ctrl.Rule(P3['L']&P1['L']&P2['H'],frpn['LM'])
rule35=ctrl.Rule(P3['L']&P1['L']&P2['VH'],frpn['M'])
rule36=ctrl.Rule(P3['M']&P1['L']&P2['VL'],frpn['M'])
rule37=ctrl.Rule(P3['M']&P1['L']&P2['L'],frpn['HL'])
rule38=ctrl.Rule(P3['M']&P1['L']&P2['M'],frpn['LM'])
rule39=ctrl.Rule(P3['M']&P1['L']&P2['H'],frpn['M'])
rule40=ctrl.Rule(P3['M']&P1['L']&P2['VH'],frpn['HM'])
rule41=ctrl.Rule(P3['H']&P1['L']&P2['VL'],frpn['VL'])
rule42=ctrl.Rule(P3['H']&P1['L']&P2['L'],frpn['L'])
rule43=ctrl.Rule(P3['H']&P1['L']&P2['M'],frpn['HL'])
rule44=ctrl.Rule(P3['H']&P1['L']&P2['H'],frpn['LM'])
rule45=ctrl.Rule(P3['H']&P1['L']&P2['VH'],frpn['M'])
rule46=ctrl.Rule(P3['VH']&P1['L']&P2['VL'],frpn['L'])
rule47=ctrl.Rule(P3['VH']&P1['L']&P2['L'],frpn['HL'])
rule48=ctrl.Rule(P3['VH']&P1['L']&P2['M'],frpn['HL'])
rule49=ctrl.Rule(P3['VH']&P1['L']&P2['H'],frpn['LM'])
rule50=ctrl.Rule(P3['VH']&P1['L']&P2['VH'],frpn['M'])
rule51=ctrl.Rule(P3['VL']&P1['M']&P2['VL'],frpn['VL'])
rule52=ctrl.Rule(P3['VL']&P1['M']&P2['L'],frpn['L'])
rule53=ctrl.Rule(P3['VL']&P1['M']&P2['M'],frpn['L'])
rule54=ctrl.Rule(P3['VL']&P1['M']&P2['H'],frpn['HL'])
rule55=ctrl.Rule(P3['VL']&P1['M']&P2['VH'],frpn['HL'])
rule56=ctrl.Rule(P3['L']&P1['M']&P2['VL'],frpn['HL'])
rule57=ctrl.Rule(P3['L']&P1['M']&P2['L'],frpn['LM'])
rule58=ctrl.Rule(P3['L']&P1['M']&P2['M'],frpn['M'])
rule59=ctrl.Rule(P3['L']&P1['M']&P2['H'],frpn['HM'])
rule60=ctrl.Rule(P3['L']&P1['M']&P2['VH'],frpn['LH'])
rule61=ctrl.Rule(P3['M']&P1['M']&P2['VL'],frpn['LM'])
rule62=ctrl.Rule(P3['M']&P1['M']&P2['L'],frpn['M'])
rule63=ctrl.Rule(P3['M']&P1['M']&P2['M'],frpn['HM'])
rule64=ctrl.Rule(P3['M']&P1['M']&P2['H'],frpn['LH'])
rule65=ctrl.Rule(P3['M']&P1['M']&P2['VH'],frpn['H'])
rule66=ctrl.Rule(P3['H']&P1['M']&P2['VL'],frpn['L'])
rule67=ctrl.Rule(P3['H']&P1['M']&P2['L'],frpn['HL'])
rule68=ctrl.Rule(P3['H']&P1['M']&P2['M'],frpn['LM'])
rule69=ctrl.Rule(P3['H']&P1['M']&P2['H'],frpn['M'])
rule70=ctrl.Rule(P3['H']&P1['M']&P2['VH'],frpn['HM'])
rule71=ctrl.Rule(P3['VH']&P1['M']&P2['VL'],frpn['HL'])
rule72=ctrl.Rule(P3['VH']&P1['M']&P2['L'],frpn['HL'])
rule73=ctrl.Rule(P3['VH']&P1['M']&P2['M'],frpn['LM'])
rule74=ctrl.Rule(P3['VH']&P1['M']&P2['H'],frpn['M'])
rule75=ctrl.Rule(P3['VH']&P1['M']&P2['VH'],frpn['HM'])
rule76=ctrl.Rule(P3['VL']&P1['H']&P2['VL'],frpn['L'])
rule77=ctrl.Rule(P3['VL']&P1['H']&P2['L'],frpn['HL'])
rule78=ctrl.Rule(P3['VL']&P1['H']&P2['M'],frpn['LM'])
rule79=ctrl.Rule(P3['VL']&P1['H']&P2['H'],frpn['M'])
rule80=ctrl.Rule(P3['VL']&P1['H']&P2['VH'],frpn['HM'])
rule81=ctrl.Rule(P3['L']&P1['H']&P2['VL'],frpn['LM'])
rule82=ctrl.Rule(P3['L']&P1['H']&P2['L'],frpn['M'])
rule83=ctrl.Rule(P3['L']&P1['H']&P2['M'],frpn['HM'])
rule84=ctrl.Rule(P3['L']&P1['H']&P2['H'],frpn['LH'])
rule85=ctrl.Rule(P3['L']&P1['H']&P2['VH'],frpn['H'])
rule86=ctrl.Rule(P3['M']&P1['H']&P2['VL'],frpn['L'])
rule87=ctrl.Rule(P3['M']&P1['H']&P2['L'],frpn['HL'])
rule88=ctrl.Rule(P3['M']&P1['H']&P2['M'],frpn['LM'])
rule89=ctrl.Rule(P3['M']&P1['H']&P2['H'],frpn['HM'])
rule90=ctrl.Rule(P3['M']&P1['H']&P2['VH'],frpn['LH'])
rule91=ctrl.Rule(P3['H']&P1['H']&P2['VL'],frpn['LM'])
rule92=ctrl.Rule(P3['H']&P1['H']&P2['L'],frpn['M'])
rule93=ctrl.Rule(P3['H']&P1['H']&P2['M'],frpn['HM'])
rule94=ctrl.Rule(P3['H']&P1['H']&P2['H'],frpn['LH'])
rule95=ctrl.Rule(P3['H']&P1['H']&P2['VH'],frpn['H'])
rule96=ctrl.Rule(P3['VH']&P1['H']&P2['VL'],frpn['LM'])
rule97=ctrl.Rule(P3['VH']&P1['H']&P2['L'],frpn['M'])
rule98=ctrl.Rule(P3['VH']&P1['H']&P2['M'],frpn['HM'])
rule99=ctrl.Rule(P3['VH']&P1['H']&P2['H'],frpn['LH'])
rule100=ctrl.Rule(P3['VH']&P1['H']&P2['VH'],frpn['H'])
rule101=ctrl.Rule(P3['VL']&P1['VH']&P2['VL'],frpn['HL'])
rule102=ctrl.Rule(P3['VL']&P1['VH']&P2['L'],frpn['LM'])
rule103=ctrl.Rule(P3['VL']&P1['VH']&P2['M'],frpn['M'])
rule104=ctrl.Rule(P3['VL']&P1['VH']&P2['H'],frpn['HM'])
rule105=ctrl.Rule(P3['VL']&P1['VH']&P2['VH'],frpn['H'])
rule106=ctrl.Rule(P3['L']&P1['VH']&P2['VL'],frpn['LM'])
rule107=ctrl.Rule(P3['L']&P1['VH']&P2['L'],frpn['LM'])
rule108=ctrl.Rule(P3['L']&P1['VH']&P2['M'],frpn['M'])
rule109=ctrl.Rule(P3['L']&P1['VH']&P2['H'],frpn['H'])
rule110=ctrl.Rule(P3['L']&P1['VH']&P2['VH'],frpn['H'])
rule111=ctrl.Rule(P3['M']&P1['VH']&P2['VL'],frpn['LH'])
rule112=ctrl.Rule(P3['M']&P1['VH']&P2['L'],frpn['M'])
rule113=ctrl.Rule(P3['M']&P1['VH']&P2['M'],frpn['HM'])
rule114=ctrl.Rule(P3['M']&P1['VH']&P2['H'],frpn['LH'])
rule115=ctrl.Rule(P3['M']&P1['VH']&P2['VH'],frpn['H'])
rule116=ctrl.Rule(P3['H']&P1['VH']&P2['VL'],frpn['M'])
rule117=ctrl.Rule(P3['H']&P1['VH']&P2['L'],frpn['HM'])
rule118=ctrl.Rule(P3['H']&P1['VH']&P2['M'],frpn['LH'])
rule119=ctrl.Rule(P3['H']&P1['VH']&P2['H'],frpn['H'])
rule120=ctrl.Rule(P3['H']&P1['VH']&P2['VH'],frpn['VH'])
rule121=ctrl.Rule(P3['VH']&P1['VH']&P2['VL'],frpn['HM'])
rule122=ctrl.Rule(P3['VH']&P1['VH']&P2['L'],frpn['LH'])
rule123=ctrl.Rule(P3['VH']&P1['VH']&P2['M'],frpn['H'])
rule124=ctrl.Rule(P3['VH']&P1['VH']&P2['H'],frpn['VH'])
rule125=ctrl.Rule(P3['VH']&P1['VH']&P2['VH'],frpn['VH'])


# Define the aggregation method as 'centroid' for the output variable 'frpn'
frpn.defuzzify_method = 'centroid'

# Create a control system
rules=[rule1,rule2,rule3,rule4,rule5,rule6,rule7,rule8,rule9,rule10
                                ,rule11,rule12,rule13,rule14,rule15,rule16,rule17,rule18,rule19,rule20
                                ,rule21,rule22,rule23,rule24,rule25,rule26,rule27,rule28,rule29,rule30
                                ,rule31,rule32,rule33,rule34,rule35,rule36,rule37,rule38,rule39,rule40
                                ,rule41,rule42,rule43,rule44,rule45,rule46,rule47,rule48,rule49,rule50
                                ,rule51,rule52,rule53,rule54,rule55,rule56,rule57,rule58,rule59,rule60
                                ,rule61,rule62,rule63,rule64,rule65,rule66,rule67,rule68,rule69,rule70
                                ,rule71,rule72,rule73,rule74,rule75,rule76,rule77,rule78,rule79,rule80
                                ,rule81,rule82,rule83,rule84,rule85,rule86,rule87,rule88,rule89,rule90
                                ,rule91,rule92,rule93,rule94,rule95,rule96,rule97,rule98,rule99,rule100
                                ,rule101,rule102,rule103,rule104,rule105,rule106,rule107,rule108,rule109,rule110
                                ,rule111,rule112,rule113,rule114,rule115,rule116,rule117,rule118,rule119,rule120
                                ,rule121,rule122,rule123,rule124,rule125]
system = ctrl.ControlSystem(rules)

# Create a control system simulation
sim = ctrl.ControlSystemSimulation(system)


# Define the route for the home page
@app.route('/fmea')
def fmea():
    m = 1
    n = 3
    priority = np.zeros((n))
    priority[0] = request.args.get('ps') #ps: prioritas s
    priority[1] = request.args.get('po') #po: prioritas o
    priority[2] = request.args.get('pd') #pd: prioritas d
    
    a = np.zeros((m, n))
    A = np.zeros((m, n))
    a[0, 0] = request.args.get('ns') #ns: nilai s
    a[0, 1] = request.args.get('no') #no: nilai o
    a[0, 2] = request.args.get('nd') #nd: nilai d
    
    if priority[0] == 1: #prioritas S ditentukan sama dengan 1 
        sim.input['P1'] = a[0, 0] #nilai S dimasukan ke prioritas 1
        if priority[1] == 2: #prioritas O ditentukan sama dengan 2
            sim.input['P2'] = a[0, 1] #nilai O dimasukan ke prioritas 2
            sim.input['P3'] = a[0, 2] #nilai D dimasukan ke prioritas 3
        else: #prioritas O ditentukan sama dengan 3
            sim.input['P2'] = a[0, 2] #nilai D dimasukan ke prioritas 2
            sim.input['P3'] = a[0, 1] #nilai O dimasukan ke prioritas 3
    elif priority[0] == 2:
        sim.input['P2'] = a[0, 0]
        if priority[1] == 1:
            sim.input['P1'] = a[0, 1]
            sim.input['P3'] = a[0, 2]
        else:
            sim.input['P1'] = a[0, 2]
            sim.input['P3'] = a[0, 1]
    elif priority[0] == 3:
        sim.input['P3'] = a[0, 0]
        if priority[1] == 1:
            sim.input['P1'] = a[0, 1]
            sim.input['P2'] = a[0, 2]
        else:
            sim.input['P1'] = a[0, 2]
            sim.input['P2'] = a[0, 1]

    # Calculate the FRPN value using centroid method
    sim.compute()
    frpn_value = sim.output['frpn']
    str_frpn_value = str(frpn_value)
    
    
    return str_frpn_value

if __name__ == '__main__':
    app.run(debug=True)
