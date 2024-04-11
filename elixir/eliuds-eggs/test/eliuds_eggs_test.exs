defmodule EliudsEggsTest do
  use ExUnit.Case

  describe "egg count" do
    test "0 eggs" do
      assert EliudsEggs.egg_count(0) == 0
    end

    test "1 egg" do
      assert EliudsEggs.egg_count(16) == 1
    end

    test "4 eggs" do
      assert EliudsEggs.egg_count(89) == 4
    end

    test "13 eggs" do
      assert EliudsEggs.egg_count(2_000_000_000) == 13
    end

    test "100 eggs" do
      assert EliudsEggs.egg_count(1_267_650_600_228_229_401_496_703_205_375) == 100
    end
  end
end
