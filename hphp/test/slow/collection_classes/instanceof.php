<?hh
$vector = Vector {};
$map = Map {};
$smap = StableMap {};
$set = Set {};
$pair = Pair {null, null};
var_dump($vector instanceof Traversable);
var_dump($vector instanceof KeyedTraversable);
var_dump($vector instanceof Indexish);
var_dump($vector instanceof ConstSetAccess);
var_dump($vector instanceof ConstIndexAccess);
var_dump($vector instanceof ConstMapAccess);
var_dump($vector instanceof ConstVector);
var_dump($vector instanceof ConstMap);
var_dump($vector instanceof ConstSet);
echo "========\n";
var_dump($map instanceof Traversable);
var_dump($map instanceof KeyedTraversable);
var_dump($map instanceof Indexish);
var_dump($map instanceof ConstSetAccess);
var_dump($map instanceof ConstIndexAccess);
var_dump($map instanceof ConstMapAccess);
var_dump($map instanceof ConstVector);
var_dump($map instanceof ConstMap);
var_dump($map instanceof ConstSet);
echo "========\n";
var_dump($smap instanceof Traversable);
var_dump($smap instanceof KeyedTraversable);
var_dump($smap instanceof Indexish);
var_dump($smap instanceof ConstSetAccess);
var_dump($smap instanceof ConstIndexAccess);
var_dump($smap instanceof ConstMapAccess);
var_dump($smap instanceof ConstVector);
var_dump($smap instanceof ConstMap);
var_dump($smap instanceof ConstSet);
echo "========\n";
var_dump($set instanceof Traversable);
var_dump($set instanceof KeyedTraversable);
var_dump($set instanceof Indexish);
var_dump($set instanceof ConstSetAccess);
var_dump($set instanceof ConstIndexAccess);
var_dump($set instanceof ConstMapAccess);
var_dump($set instanceof ConstVector);
var_dump($set instanceof ConstMap);
var_dump($set instanceof ConstSet);
echo "========\n";
var_dump($pair instanceof Traversable);
var_dump($pair instanceof KeyedTraversable);
var_dump($pair instanceof Indexish);
var_dump($pair instanceof ConstSetAccess);
var_dump($pair instanceof ConstIndexAccess);
var_dump($pair instanceof ConstMapAccess);
var_dump($pair instanceof ConstVector);
var_dump($pair instanceof ConstMap);
var_dump($pair instanceof ConstSet);
