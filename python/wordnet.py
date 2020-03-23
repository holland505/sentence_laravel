print("類似語・対義語検索")

import sys
import json

from nltk.corpus import wordnet
synonyms = []
antonyms = []

for syn in wordnet.synsets(sys.argv[1]):
    for l in syn.lemmas():
        if "_" not in l.name() and "-" not in l.name():
            synonyms.append(l.name())
        if l.antonyms():
            antonyms.append(l.antonyms()[0].name())

# Synonyms
#print(list(set(synonyms)))
synonyms_json = {"synonyms":list(set(synonyms))}
json.dumps(synonyms_json)

# antonyms
antonyms_json = {"antonyms":list(set(antonyms))}
json.dumps(antonyms_json)
#print(list(set(antonyms)))

synonyms_json.update(antonyms_json)
print(synonyms_json)

