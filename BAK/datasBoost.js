var themes = {
    1: "Everyday communication",
    2: "Professional Communication",
    3: "Specialist Communication",
    4: "Learning focus"
};

var topic = {
    1: "Numbers",
    2: "Way Finding",
    3: "Conversations",
    4: "Personal Information",
    5: "Job hunting",
    6: "Presentations",
    7: "Emailing",
    8: "Essays",
    9: "Scientific vocabulary",
    10: "Object / Device description",
    11: "Products and services",
    12: "Data and descriptions",
    13: "Skills",
    14: "Listening",
    15: "Reading",
    16: "Voice work",
    17: "Grammar",
    18: "Learning strategies",
    19: "Culture"
};

var subtopic = {
    1: "Tenses",
    2: "Adjectives"
};

var parcours = [
    {
        "nom": "Numbers",
        "theme": 1,
        "topic": 1,
        "subtopic": null,
        "tags": ["number", "numbers", "ordinal", "cardinal"],
        "lp_id": 841    //  1429
    },
    {
        "nom": "Telling the time",
        "theme": 1,
        "topic": 1,
        "subtopic": null,
        "tags": ["time", "telling the time", "duration", "hour", "minutes"],
        "lp_id": 847    //  2122
    },
    {
        "nom": "Greetings",
        "theme": 1,
        "topic": 3,
        "subtopic": null,
        "tags": ["conversations", "conversation", "greetings", "speaking", "hello"],
        "lp_id": 842    //  1434
    },
    {
        "nom": "Socialising / Small talk",
        "theme": 1,
        "topic": 3,
        "subtopic": null,
        "tags": ["socialising", "small talk", "talk", "social", "information", "questions"],
        "lp_id": 803    //  1297
    },
    {
        "nom": "Hobbies",
        "theme": 1,
        "topic": 4,
        "subtopic": null,
        "tags": ["hobbies", "hobby", "fun", "activities", "interests"],
        "lp_id": 830    //  1416
    },
    {
        "nom": "Filling in a form",
        "theme": 1,
        "topic": 4,
        "subtopic": null,
        "tags": ["application", "registration", "form", "filling", "fill", "administrative"],
        "lp_id": 822    //  1396
    },
    {
        "nom": "Personality",
        "theme": 1,
        "topic": 4,
        "subtopic": null,
        "tags": ["adjectives", "personality", "description"],
        "lp_id": 812    //  1371
    },
    {
        "nom": "Way finding 1",
        "theme": 1,
        "topic": 2,
        "subtopic": null,
        "tags": ["way finding", "way", "direction", "directions", "map"],
        "lp_id": 817    //  1377
    },
    {
        "nom": "Way finding 2",
        "theme": 1,
        "topic": 2,
        "subtopic": null,
        "tags": ["way finding", "way", "direction", "directions", "map"],
        "lp_id": 806    //  1301
    },
    {
        "nom": "Way finding",
        "theme": 1,
        "topic": 2,
        "subtopic": null,
        "tags": ["way finding", "way", "direction", "directions", "map"],
        "lp_id": 869
    },
    {
        "nom": "Question words",
        "theme": 1,
        "topic": 3,
        "subtopic": null,
        "tags": ["questions", "question", "question words", "asking", "ask"],
        "lp_id": 848    //  2126
    },
	{
        "nom": "Basic questions",
        "theme": 1,
        "topic": 3,
        "subtopic": null,
        "tags": ["questions", "question", "basic", "basicÃ‚ questions", "ask"],
        "lp_id": 849    //  2127
    },
    {
        "nom": "CV",
        "theme": 2,
        "topic": 5,
        "subtopic": null,
        "tags": ["cv", "curriculum Vitae", "skills", "experience", "job", "training", "job offer"],
        "lp_id": 846    //  1443
    },
    {
        "nom": "Cover letters",
        "theme": 2,
        "topic": 5,
        "subtopic": null,
        "tags": ["cover letters", "letter writing", "job", "job offer", "training"],
        "lp_id": 831    //  1417
    },
    {
        "nom": "Structuring a presentation",
        "theme": 2,
        "topic": 6,
        "subtopic": null,
        "tags": ["presentations", "structure", "public", "speaking", "presentation"],
        "lp_id": 837    //  1424
    },
    {
        "nom": "Interaction",
        "theme": 2,
        "topic": 6,
        "subtopic": null,
        "tags": ["presentation", "public speaking", "public", "speaking", "interaction"],
        "lp_id": 838    //  1426
    },
    {
        "nom": "Body language",
        "theme": 2,
        "topic": 6,
        "subtopic": null,
        "tags": ["body", "bodylanguage", "posture", "presentations", "gesture"],
        "lp_id": 832    //  1418
    },
    {
        "nom": "Emailing",
        "theme": 2,
        "topic": 7,
        "subtopic": null,
        "tags": ["emailing", "email", "mail", "communication", "write"],
        "lp_id": 814    //  1298
    },
    {
        "nom": "Paragraphing",
        "theme": 2,
        "topic": 8,
        "subtopic": null,
        "tags": ["paragraphing", "paragraph", "essay", "writing", "topic sentence"],
        "lp_id": 811    //  1367
    },
    {
        "nom": "Everyday Science: In the lab",
        "theme": 3,
        "topic": 9,
        "subtopic": null,
        "tags": ["science", "sciences", "lab", "laboratory", "chimical"],
        "lp_id": 827    //  1412
    },
    {
        "nom": "Biomedical Engineering",
        "theme": 3,
        "topic": 9,
        "subtopic": null,
        "tags": ["biomedical", "engineering", "engineer", "medicine", "biomed"],
        "lp_id": 833    //  1419
    },
    {
        "nom": "Physics and Materials Science",
        "theme": 3,
        "topic": 9,
        "subtopic": null,
        "tags": ["physics", "physic", "material", "materials", "science"],
        "lp_id": 835    //  1421
    },
    {
        "nom": "Basic I.T. vocabulary",
        "theme": 3,
        "topic": 9,
        "subtopic": null,
        "tags": ["it", "vocabulary", "computer", "basic it vocabulary", "engineering"],
        "lp_id": 828    //  1413
    },
    {
        "nom": "Green Engineering",
        "theme": 3,
        "topic": 9,
        "subtopic": null,
        "tags": ["green", "engineering", "engineer", "energy", "clean"],
        "lp_id": 834    //  1420
    },
    {
        "nom": "Electronics and Embedded Systems",
        "theme": 3,
        "topic": 9,
        "subtopic": null,
        "tags": ["electronic", "electronics", "embedded", "system", "systems"],
        "lp_id": 836    //  1422
    },
    {
        "nom": "Shapes",
        "theme": 3,
        "topic": 10,
        "subtopic": null,
        "tags": ["shape", "shapes", "geometry", "object", "description"],
        "lp_id": 802    //  1287
    },
    {
        "nom": "Object description",
        "theme": 3,
        "topic": 10,
        "subtopic": null,
        "tags": ["object", "description", "dimensions", "size", "object description"],
        "lp_id": 850    //  2151
    },
    {
        "nom": "Object specifications",
        "theme": 3,
        "topic": 10,
        "subtopic": null,
        "tags": ["object", "description", "specifications", "object specifications", "object description"],
        "lp_id": 851    //  2156
    },
    {
        "nom": "Object function",
        "theme": 3,
        "topic": 10,
        "subtopic": null,
        "tags": ["device", "object", "description", "function", "object description"],
        "lp_id": 818    //  1378
    },
    {
        "nom": "Position and movement",
        "theme": 3,
        "topic": 10,
        "subtopic": null,
        "tags": ["position", "prepositions", "preposition", "movement", "location"],
        "lp_id": 808    //  1305
    },
    {
        "nom": "Comparison",
        "theme": 3,
        "topic": 12,
        "subtopic": null,
        "tags": ["comparison", "compare", "superlative", "comparative", "as"],
        "lp_id": 826    //  1402
    },
    {
        "nom": "Graphs - Data - Trends",
        "theme": 3,
        "topic": 12,
        "subtopic": null,
        "tags": ["graphs", "graph", "data", "trends", "pattern"],
        "lp_id": 807    //  1302
    },
    {
        "nom": "Listening comprehension",
        "theme": 4,
        "topic": 14,
        "subtopic": null,
        "tags": ["strategies", "focused listening", "listening comprehension", "comprehension", "listening", "strategies"],
        "lp_id": 839    //  1427
    },
    {
        "nom": "Conditional Sentences",
        "theme": 4,
        "topic": 17,
        "subtopic": null,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 829    //  1415
    },
    {
        "nom": "Sentence stress",
        "theme": 4,
        "topic": 16,
        "subtopic": null,
        "tags": ["stress", "pronunciation", "intonation", "pacing", "rhythm"],
        "lp_id": 815    //  1374
    },
    {
        "nom": "Future tenses 1",
        "theme": 4,
        "topic": 17,
        "subtopic": 1,
        "tags": ["grammar", "future", "will", "going", "going to"],
        "lp_id": 844    //  1441
    },
    {
        "nom": "Future tenses 2",
        "theme": 4,
        "topic": 17,
        "subtopic": 1,
        "tags": ["grammar", "future", "will", "going", "present continuous"],
        "lp_id": 845    //  1442
    },
    {
        "nom": "Memorizing vocabulary",
        "theme": 4,
        "topic": 18,
        "subtopic": null,
        "tags": ["strategies", "memorizing", "fluency", "vocabulary", "speaking", "oral"],
        "lp_id": 840    //  1428
    },
    {
        "nom": "Shower conversations",
        "theme": 4,
        "topic": 18,
        "subtopic": null,
        "tags": ["strategies", "memorizing", "fluency", "shower", "conversation", "oral"],
        "lp_id": 843    //  1436
    },
    {
        "nom": "Sport",
        "theme": 4,
        "topic": 19,
        "subtopic": null,
        "tags": ["sport", "make", "play", "do", "sports"],
        "lp_id": 825    //  1400
    },
    {
        "nom": "Cinema",
        "theme": 4,
        "topic": 19,
        "subtopic": null,
        "tags": ["cinema", "movies", "film", "genre", "plot", "movie"],
        "lp_id": 819    //  1381
    },
    {
        "nom": "Series",
        "theme": 4,
        "topic": 19,
        "subtopic": null,
        "tags": ["series", "tv", "serie", "episode", "netflix"],
        "lp_id": 824    //  1399
    },
    {
        "nom": "Word stress 1",
        "theme": 4,
        "topic": 16,
        "subtopic": null,
        "tags": ["pronunciation", "prosody", "phonetics", "syllables", "stress"],
        "lp_id": 820    //  1382
    },
    {
        "nom": "Word stress 2",
        "theme": 4,
        "topic": 16,
        "subtopic": null,
        "tags": ["pronunciation", "prosody", "phonetics", "syllables", "stress"],
        "lp_id": 821    //  1389
    },
    {
        "nom": "Pronouncing ed",
        "theme": 4,
        "topic": 16,
        "subtopic": null,
        "tags": ["pronounce", "pronuncing", "past participles", "past", "pronunciation", "ed"],
        "lp_id": 810    //  1366
    },
    {
        "nom": "Pronouncing TH",
        "theme": 4,
        "topic": 16,
        "subtopic": null,
        "tags": ["pronounce", "pronuncing", "pronunciation", "phonetics", "th", "syllables", "sounds"],
        "lp_id": 813    //  1372
    },
    {
        "nom": "Pronouncing H",
        "theme": 4,
        "topic": 16,
        "subtopic": null,
        "tags": ["pronounce", "pronuncing", "pronunciation", "phonetics", "h", "syllables", "different"],
        "lp_id": 814    //  1373
    },
    {
        "nom": "Tiny differences",
        "theme": 4,
        "topic": 16,
        "subtopic": null,
        "tags": ["long vowels", "short vowels", "vowels", "differences", "tiny"],
        "lp_id": 823    //  1397
    },
    {
        "nom": "Thinking in English",
        "theme": 4,
        "topic": 18,
        "subtopic": null,
        "tags": ["strategies", "thinking", "think", "english"],
        "lp_id": 805    //  1299
    },
    {
        "nom": "Adjectives v. adverbs",
        "theme": 4,
        "topic": 17,
        "subtopic": 2,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 860
    },
    {
        "nom": "Negative adj & prefixes",
        "theme": 4,
        "topic": 17,
        "subtopic": 2,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 861
    },
    {
        "nom": "Adjectives and '-ed' / '-ing' endings",
        "theme": 4,
        "topic": 17,
        "subtopic": 2,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 862
    },
    {
        "nom": "Practice Adjectives",
        "theme": 4,
        "topic": 17,
        "subtopic": 2,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 863
    },
    {
        "nom": "Present simple and continuous",
        "theme": 4,
        "topic": 17,
        "subtopic": 1,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 864
    },
    {
        "nom": "Present perfect and perfect continuous",
        "theme": 4,
        "topic": 17,
        "subtopic": 1,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 865
    },
    {
        "nom": "Past tenses",
        "theme": 4,
        "topic": 17,
        "subtopic": 1,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 866
    },
    {
        "nom": "Comparatives and Superlatives",
        "theme": 4,
        "topic": 17,
        "subtopic": 2,
        "tags": ["conditional", "sentence", "sentences", "if", "condition"],
        "lp_id": 867
    }

    
];